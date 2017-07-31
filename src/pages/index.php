<?php
require('_config/config.php');
?>
<!doctype html>
<html>
	<head>
		<title>StingrayPHP</title>
		<?php require('pages/partials/head.php'); ?>
	</head>
	<body>
		<!-- The modal code for manage the login / creation account -->
		<div id="myAccount" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" style="padding:35px 50px;">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        	</div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
				</div>
			</div>
		</div>
		<?php
					require(SMARTY_DIR . 'Smarty.class.php');
					$smarty = new Smarty;

					// --------------------------------------------------------- //
					// Backup code for smarty template language									 //
					// --------------------------------------------------------- //

					//$smarty->force_compile = true;
					//$smarty->debugging = true;
					//$smarty->caching = true;
					//$smarty->cache_lifetime = 120;

					// --------------------------------------------------------- //
					// Backup code for smarty template language									 //
					// --------------------------------------------------------- //

					$smarty->assign("paragraph", "StingrayPHP Framework");
					$smarty->assign("header", "Header della pagina index");

					$smarty->assign("navigation", array("home" => "" ,"listItem1" => "","listItem2" => "","listItem3" => ""));
					$smarty->assign("glyphicon", "glyphicon");
					$smarty->assign("shopping", "shopping");
					$smarty->assign("cart", "cart");
					$smarty->assign("cartlabel", "cart");
					$smarty->assign("panelOneText","Testo on the first panel");
					$smarty->assign("panelSecondText","Testo on the second panel");
					$smarty->assign("panelThirdText","Testo on the third panel");
					$smarty->assign("navigation", array("home" => "Home","listItem1" => "Categoria1","listItem2" => "Categoria2","listItem3" => "Categoria3"));

					$smarty->display('_templates/'.THEME.'/index.tpl');
		?>
		<?php require('pages/partials/footer.php'); ?>
		<script src="_js/stingray.js"></script>
	</body>
</html>
