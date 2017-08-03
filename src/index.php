<?php require('_config/config.php'); ?>
<!doctype html>
<html>
	<head>
		<title>StingrayPHP</title>
		<?php require('pages/partials/head.php'); ?>
	</head>
	<body ng-app="stingrayApp">
		<div id="myAccount" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" style="padding:35px 50px;">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        	</div>
        <div class="modal-body">
          <form role="form" name="accountForm">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password">
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

		<!-- Begin Navigation Bar -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">Logo</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar" aria-expanded="true">
					<ul class="nav navbar-nav">
								<li><a href="/#!/subhome">Subhome 1</a></li>
								<li><a href="#">Subhome 2</a></li>
								<li><a href="#">Subhome 3</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="myAccount"><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
						<li><a href="#"><span class= "glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- End 	Navigation Bar 	-->
		<!-- Routing will be modify and updated with AngualrJS -->
		<div class="contaier">
			<div ng-view="" id="ng-view"></div>
		</div>
</div>
<?php require('pages/partials/footer.php'); ?>
<script src="_js/angular.min.js"></script>
<script src="_js/angular-route.min.js"></script>
<script src="_js/stingrayApp.js"></script>
<script src="_js/stingrayService.js"></script>
<script src="_js/stingray.js"></script>
</body>
</html>
