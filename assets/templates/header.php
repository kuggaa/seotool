<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Local SEO Company | Local Search Engine Optimization Services</title>
	<meta name="description" content="Local SEO offers local SEO services to small and medium business. Our Local SEO services can help any local business acquire new customers through digital marketing, Google Local business marketing, small business SEO and online directories.">

	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Stylesheets -->
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="../../assets/css/style.css" rel="stylesheet">
	<link href="../../assets/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../../assets/css/main.css">
	<link rel="stylesheet" href="../../assets/css/normalize.css">
	<link rel="stylesheet" href="../../assets/css/layout.css">
	<link href="assets/css/localseov3.css" rel="stylesheet">

	<link href='http://fonts.googleapis.com/css?family=Alef:400,700' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	          <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	        <![endif]-->

	<link href='http://fonts.googleapis.com/css?family=Alef:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

	<script src="../../assets/js/jquery.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>

	<script type='text/javascript' src="../../assets/js/bootstrap-progressbar.js"></script>
	<!--[if IE]><script type="text/javascript" src="js/excanvas.js"></script><![endif]-->
	<script src="../../assets/js/jquery.knob.js"></script>
	<script>
		$(function($) {
			$(".knob").knob();
		});
	</script>
</head>
<body>
	<div class="container-full block">
		<a href="#mobileClass" id="anchor">.</a>
		<header class="cont-w">
		    <ul id="login">
	    	<?php 
	    		$user = $_SESSION['user'];
	    		if ($user == null) { ?>
	        	<li><a href="login.php">Login</a></li>
	        <?php } else { ?>
	        	<div class="dropdown">
					<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
						<?php echo $user->firstname . " " . $user->lastname; ?>
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Update profile</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Change password</a></li>
						<li role="presentation" class="divider"></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="signout.php">Log out</a></li>
					</ul>
				</div>
	        <?php } ?>
		        
		    </ul>
		    <h1>
		        <a href="index.php" class="logo">
		            <img src="assets/img/nr-logo.png" alt="Native Rank" title="Back to the home page">
		        </a>
		    </h1>   
		</header>