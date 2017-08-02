<?php
/**
  * config.environment.php : database detail for have data to display and elaborate.
  * Here you may include the detail for production server and local server.
  */
    define("DB_LANGUAGE", "auto");
    define("DB_DBMS_TYPE", "mysql");
    define("DB_HOST_NAME", "localhost");
    define("DB_USER_NAME", "root");
    define("DB_PASSWORD", "password");
    define("DB_SCHEMA", "db_example");
    define("DB_PORT_CONN", "3306");

  /**
    * Configuration of constant for the UI
    */
  define('THEME', 'default');
  define('ENCODING', 'UTF-8');

  define('ENDPOINT', '//'.$_SERVER['SERVER_NAME'].'/_templates/'.THEME);
 ?>
