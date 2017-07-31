<?php
require('../_config/config.php');
?>
<?php
					//require(SMARTY_DIR . 'Smarty.class.php');
					//$smarty = new Smarty;
					//$smarty->force_compile = true;
					//$smarty->debugging = true;
					//$smarty->caching = true;
					//$smarty->cache_lifetime = 120;
					/*
					$smarty->assign("paragraph", "StingrayPHP Framework");
					$smarty->assign("header", "Header della pagina index");
					$smarty->assign("navigation", array("home" => "" ,
																							"listItem1" => "",
																							"listItem2" => "",
																							"listItem3" => ""
																						));
					$smarty->assign("glyphicon", "glyphicon");
					$smarty->assign("shopping", "shopping");
					$smarty->assign("cart", "cart");
					$smarty->assign("cartlabel", "cart");
					$smarty->assign("paragraphTwoThird", "parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole
					parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole
					parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole
					parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole parole ");

					$smarty->assign("navigation", array("home" => "Home",
																							"listItem1" => "Categoria1",
																							"listItem2" => "Categoria2",
																							"listItem3" => "Categoria3"));


					$smarty->display('_templates/'.THEME.'/SubHomePage.tpl');
					*/

					include('../_templates/'.THEME.'/subHomePage.tpl')
?>
