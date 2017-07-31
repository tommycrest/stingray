 <?php
 /**
   * config.php : conditional loading for different page. This file will be included
   * in every page that user will visit inside our application.
   * Define the working environment [ local | production ]
   */
   define('ENVIRONMENT', 'local');

   // Get the current working directory
   define('ABSOLUTE_PATH', getcwd());

   //echo $_SERVER['DOCUMENT_ROOT'];
   //echo realpath('_includes'); //usare realpath
   //echo realpath('_includes/smarty');

   define('INCLUDES_LAYER', realpath('_includes'));
   define('SMARTY_DIR', realpath('_includes/smarty'));
   define('CSS_DIR', ABSOLUTE_PATH.'/_templates/default/_css/');
   define('TRANSLATION_LAYER', realpath('_translations'));
   define('CONFIG_LAYER', realpath(dirname(__FILE__)));

   //echo realpath('_includes/smarty').'/'.'Smarty.class.php';

   /**
    * Create the instance of the classes for the translation [ TBD ]
    */
   //echo ABSOLUTE_PATH;
   //echo INCLUDES_LAYER;
   //require_once(INCLUDES_LAYER.'class.Translator.php');

   /*if(isset($_GET['lang'])) {
  	 $translate = new Translator($_GET['lang']);
    } else {
	   $translate = new Translator('en');
   }*/

   /**
    * Switching the environment betweeen local env and production env
    */
   if( ENVIRONMENT == 'local') {
     require_once(CONFIG_LAYER.'/config.local.php');
   }
   if( ENVIRONMENT == 'production') {
     require_once(CONFIG_LAYER.'/config.production.php');
   }

   /**
    * Connection to choose dbms with the instance of the classes Db (class.Db.php)
    */
    //require_once(INCLUDES_LAYER. 'class.Db.php');
?>
