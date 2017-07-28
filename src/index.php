<?php
	/**
	 * index.php : all my call will be on this index so all the business routing logic
	 * will take effect as a single page application.
	 */
	//include('pages/index.php');
	include('_includes/routing.php');

	$route = getPageName(0);

	switch($route) {
		case '/':
			include('pages/index.php');
			break;
		case 'subhome.php':
			include('pages/subHomePage.php');
			break;
		case 'subhome':
			include('pages/subHomePage.php');
			break;
		default:
			include('pages/index.php');
	}
?>
