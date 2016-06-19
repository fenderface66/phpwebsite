<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<div id="loader-wrapper">

	<div id="loader"></div>

	<div class="loader-section section-left"></div>
	<div class="loader-section section-right"></div>

</div>
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






<section class="section_1">

	<div class="toTop"><a href="#"><i class="ion-chevron-up animated"></i></a></div>
	<div class="guide">
		<h1 class="intro">SCROLL TO LEARN</h1>
		<i class="ion-chevron-down point-down"></i>
	</div>
	<div class="balloon_container"><img class="balloon animated" src="img/baloon.png"></div>


</section>


<section class="section_2">

	<h1>languages</h1>
	<div class="language ">
		<div class="html slider slide-left" data-plugin-options='{"speed":1000, "distance":2000}'>
			<h3>HTML</h3></div>
		<div class="css slider slide-left" data-plugin-options='{"speed":1200, "distance":2000}'>
			<h3>CSS</h3></div>
		<div class="javascript slider slide-left" data-plugin-options='{"speed":1200, "distance":2000}'>
			<h3>Javascript</h3></div>
		<div class="php slider slide-left" data-plugin-options='{"speed":1200, "distance":2000}'>
			<h3>PHP</h3></div>
			<div class="python slider slide-left" data-plugin-options='{"speed":1290, "distance":2000}'>
			<h3>Python</h3></div>
		<div class="chart-x"></div>
		<div class="chart-y1 chart-y">
			<h3 class="number">1</h3></div>
		<div class="chart-y2 chart-y">
			<h3 class="number">2</h3></div>
		<div class="chart-y3 chart-y">
			<h3 class="number">3</h3></div>
		<div class="chart-y4 chart-y">
			<h3 class="number">4</h3></div>
		<div class="chart-y5 chart-y">
			<h3 class="number">5</h3></div>



		</section>

	<section class="section_3">
		<h1>creative software</h1>
		<div class="chart-x1"></div>
		<div class="chart-x2"></div>
		<div class="chart-x3"></div>
		<div class="chart-x4"></div>
		<div class="bar_container">
			<div class="bar flash wow fadeInDown" data-wow-duration="1.5s">
				<h3 class="f-label label">flash</h3>
			</div>
			
			<div class="bar illustrator wow slideInDown" data-wow-duration="1.5s">
				<h3 class="i-label label">illustrator</h3>
			</div>
			
			<div class="bar photoshop wow fadeInDown" data-wow-duration="1.5s">
				<h3 class="p-label label">photoshop</h3>
			</div>
			
		</div>
		</div>
</section>

<secton class="section_4">
	<h1>personal</h1>

	<i class="ion-ios-arrow-thin-left pointer"></i>
	<h3 class="drag-me">drag me to GO</h3>

	<a class="action-button shadow animate1 yellow"><h2 class="lets-go">Press</h2></a>

	<div class="board">

		<div class="player-container">
			<i class="draggable player ion-android-walk desktop-walker"></i>
		</div>

		<div class="square-piece piece-1  top-row droppable-go">
			<h1 class="wow slideInDown go">GO</h1><i class="ion-ios-arrow-thin-right wow slideInDown"></i></div>
		<div class="square-piece piece-2 even top-row droppable-home"><i class="even-icon ion-ios-home-outline wow slideInDown"></i></div>
		<div class="square-piece piece-3 top-row droppable-ed"><i class="ion-university wow slideInDown"></i></div>
		<div class="square-piece piece-4 even top-row droppable-music"><i class="even-icon ion-ios-musical-notes wow slideInDown"></i></div>
		<div class="square-piece piece-5 right-side droppable-psych"><i class="ion-ios-people-outline wow slideInRight"></i></div>
		<div class="square-piece piece-6 even right-side droppable-code"><i class="even-icon ion-android-laptop wow slideInRight"></i></div>
		<div class="square-piece piece-7 even bottom-row droppable-travel"><i class="even-icon ion-plane wow slideInUp"></i></div>
		<div class="square-piece piece-8  bottom-row droppable-pet"><i class="ion-ios-paw-outline wow slideInUp"></i></div>
		<div class="square-piece piece-9 even bottom-row droppable-film"><i class="even-icon ion-ios-film-outline wow slideInUp"></i></div>
		<div class="square-piece piece-10   bottom-row droppable-work"><i class="ion-ios-briefcase-outline wow slideInUp"></i></div>
		<div class="square-piece piece-11 even left-side droppable-mystery">
			<h1 class="wow slideInLeft">?</h1></div>
		<div class="square-piece piece-12  left-side droppable-game"><i class="ion-ios-game-controller-b-outline wow slideInLeft"></i></div>
		<h2 class="lets-play">Let's Play</h2>
		<h1>Robopoly!</h1>
		<div class="go-answer answer">
			<h1>Born December 2nd 1991</h1>
		</div>
		<div class="home-answer answer">
			<h2>London born and bred</h2></div>
		<div class="education-answer answer">
			<h2>Graduated from University of York in 2014 with a 2:1 in Sociology and Social Psychology.</h2></div>
		<div class="music-answer answer">
			<h2>Play guitar, piano and harmonica. HUGE Stones fan.</h2></div>
		<div class="psych-answer answer">
			<h2>Interested in the ways we use technology to establish and define social interaction</h2></div>
		<div class="coding-answer answer">
			<h2>Took an interest in front-end development at university and have been hooked ever since.</h2></div>
		<div class="work-answer answer">
			<h2>Work at Reading Room digital consultancy as a UX developer.</h2></div>
		<div class="film-answer answer">
			<h2>Love film with favorites being One flew over the Cuckoo's nest, Network and Withnail and I</h2></div>
		<div class="animals-answer answer">
			<h2>No comment necessary</h2></div>
		<div class="travel-answer answer">
			<h2>Always wanted to have travel be a large part of my work.</h2></div>
		<div class="games-answer answer">
			<h2>Addicted to games with solid narratives and challenging gameplay: MGS series, The Last of Us and Portal series.</h2></div>
		<div class="mystery-answer answer">
			<h2>mystery pug + myself</h2></div>
	</div>
</secton>

<footer><div class="social-container">

	<a class="ion-social-twitter twitter" href="https://twitter.com/RobbieHeygate?lang=en-gb"></a>
	<a class="ion-social-linkedin linkedin" href="https://uk.linkedin.com/pub/robbie-heygate/101/471/499
																								"></a>

	</div>
</footer>
</body>

<script src="js/vendor/jquery-1.11.2.min.js"></script>
<script src="js/vendor/jquery.waypoints.min.js"></script>
<script src="js/vendor/jquery.fadethis.min.js"></script>
<script src="js/vendor/easing.js"></script>
<script src="js/vendor/wow.min.js"></script>
<script src="js/vendor/jquery.magnific-popup.min.js"></script>
<script src="js/vendor/jquery-ui.min.js"></script>


<script>


	if ($('#parallax-bg3').length) {

		redrawDotNav();

		/* Scroll event handler */
		$(window).bind('scroll', function(e) {
			parallaxScroll();
			redrawDotNav();
		});

		//



		/* Scroll the background layers */
		function parallaxScroll() {
			var scrolled = $(window).scrollTop();
			$('#parallax-bg3').css('top', (0 - (scrolled * .2)) + 'px');
			$('#parallax-bg2').css('top', (0 - (scrolled * .7)) + 'px');
			$('#parallax-bg1').css('top', (0 - (scrolled * 1.2)) + 'px');
		}

		/* Set navigation dots to an active state as the user scrolls */
		function redrawDotNav() {
			var section1Top = 0;
			// The top of each section is offset by half the distance to the previous section.
			var section2Top = $('#userExperience').offset().top - (($('#userExperience').offset().top - $('#userExperience').offset().top) / 2);
			var section3Top = $('#design-container').offset().top - (($('#design-container').offset().top - $('#design-container').offset().top) / 2);
			var section4Top = $('#about').offset().top - (($(document).height() - $('#about').offset().top) / 2);;


		}
	}

</script>
<script src="js/main.js"></script>
<script>
	$(window).fadeThis();
	new WOW().init();
</script>
</body>

</html>

