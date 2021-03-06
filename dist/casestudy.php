
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

<div class="case-study-page">


	<?php 

	if (isset($_GET['c_id'])) {
		$case_id = $_GET['c_id'];
	}

	$query = "SELECT * FROM case_studies WHERE case_id = $case_id";
	$case_query = mysqli_query($connection, $query);

	$numResults = mysqli_num_rows($case_query);
	$counter = 0;
	if (!$case_query) {
		die("Error" . mysqli_error($connection));
	}
	while ($row = mysqli_fetch_assoc($case_query)) {
		$case_name = $row['case_name']; 
		$case_client = $row['case_client']; 
		$case_blurb = $row['case_blurb']; 
		$case_description = $row['case_description']; 
		$case_link = $row['case_link']; 
		$case_image_one = $row['case_image_one']; 
		$case_image_two = $row['case_image_two']; 
		$case_image_three = $row['case_image_three']; 
		$case_image_four = $row['case_image_four']; 
		$case_image_five = $row['case_image_five']; 
		$case_image_six = $row['case_image_six']; 

	?>
	<div style="background-image: url('img/<?php echo $case_image_one ?>')" class="banner">
		<div class="overlay">

		</div>
		<div class="text-container">
			<h1><?php echo $case_name ?></h1>
		</div>
	</div>
	<div class="case-container span_12_of_12">
		<div class="case">
			<div class="content-container">
				<div class="des-container">
					<p><?php echo $case_description ?></p>
				</div>
				<div class="scroll-container">
					<div class="parent-container">
						<div class="scroll-message">
							<p>Scroll through pages</p>
						</div>
						<a href="img/<?php echo $case_image_two ?>" class="image-link">
							<img src="img/<?php echo $case_image_two ?>" />
						</a>
		
						<a href="img/<?php echo $case_image_three ?>" class="image-link">
							<img src="img/<?php echo $case_image_three ?>" />
						</a>
	
						<a href="img/<?php echo $case_image_four ?>" class="image-link">
							<img src="img/<?php echo $case_image_four ?>" />
						</a>
		
						<a href="img/<?php echo $case_image_five ?>" class="image-link">
							<img src="img/<?php echo $case_image_five ?>" />
						</a>
				
						<a href="img/<?php echo $case_image_six ?>" class="image-link">
							<img src="img/<?php echo $case_image_six ?>" />
						</a>
						
					</div>
				</div>
				<div class="cta-container">
					<a class="case-cta" target="_blank" href="<?php echo $case_link ?>">See for your self</a>
				</div>

			</div>

		</div>
		<?php 
	}

		?>



	</div>
</div>

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

