<?php
require('../_config/config.php');
?>
<?php
		require('/Applications/XAMPP/htdocs/project/stingray/src/smarty/Smarty.class.php');
		$smarty = new Smarty;

		// --------------------------------------------------------- //
		// Backup code for smarty template language									 //
		// --------------------------------------------------------- //

		$smarty->force_compile = true;
		//$smarty->debugging = true;
		$smarty->caching = true;
		//$smarty->cache_lifetime = 120;
		//$smarty->assign("navigation", array("home" => "" ,"listItem1" => "","listItem2" => "","listItem3" => ""));
		//$smarty->assign("glyphicon", "glyphicon");
		//$smarty->assign("shopping", "shopping");
		//$smarty->assign("cart", "cart");
		//$smarty->assign("cartlabel", "cart");
		//$smarty->assign("navigation", array("home" => "Home","listItem1" => "Categoria1","listItem2" => "Categoria2","listItem3" => "Categoria3"));

		// --------------------------------------------------------- //
		// Backup code for smarty template language									 //
		// --------------------------------------------------------- //

		// $smarty->assign("paragraph", "StingrayPHP Framework");
		// $smarty->assign("header", "Header della pagina index");
		$smarty->assign("panelOneText","Testo on the first panel");
		$smarty->assign("panelSecondText","Testo on the second panel");
		$smarty->assign("panelThirdText","Testo on the third panel");

		//$smarty->display('../../_templates/'.THEME.'/index.tpl');
		include('../_templates/'.THEME.'/index.tpl');
?>
