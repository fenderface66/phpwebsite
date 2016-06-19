<?php session_start(); ?>
<?php include "admin/db.php" ?>
<!doctype html>
<html class="no-js" lang="">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>rglheygate</title>
		<meta name="description" content="Robbie is a UX developer with deep interests for understanding the social-psychological roots of attractive and enticing web design/development.">
		<meta name="keywords" content="UX, Developer, Web-design, Front-end, Heygate, Robbie">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,700,100' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/tooltipster.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/style.css">

		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
		<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] || function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o),
					m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

			ga('create', 'UA-68464561-1', 'auto');
			ga('send', 'pageview');
		</script>
	</head>

	<body>
	<?php 
		if (isset($_SESSION['role']) && $_SESSION['role'] == 'Admin') {
			echo 
				"<div class='cms-bar'>
					<p>Hello {$_SESSION['username']}</p>
					<ul>
						<li><a href='/admin'>Admin</a></li>
						<li><a href='/admin/case_studies.php?source=add_case'>Add Case Study</a></li>
						<li><a href='/admin/includes/logout.php'>Logout</a></li>
					</ul>
				</div>";	
		}
		
	?>
		<header><nav id="primary_nav">

			<a href="index.php"><img src="img/logo-white.png"></a>

			<ul class="nav">

				<!--        <li class="navbar hvr-underline-from-center"><a class="navLink" href="#">Portfolio</a></li>-->

				<li class="navbar hvr-underline-from-center"><a class="navLink" data-dom-cache=false href="about.php">About</a></li>
				<li class="navbar hvr-underline-from-center"><a class="navLink" data-dom-cache=false href="portfolio.php">Portfolio</a></li>
				<li class="navbar hvr-underline-from-center"><a class="navLink" data-dom-cache=false href="contactform.php">Contact</a></li>
				<div class="arrow_box">
					<p>Dont Forget to </p>
					<p>Get In Touch</p>
				</div>
			</ul>
			
			



			<div class="mobile-nav-icon">
				<div id="nav-icon1">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>


			</nav>
		</header>
		<div class="clear"></div>
