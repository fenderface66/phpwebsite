


    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


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
<header><nav id="primary_nav">

    <a href="index.php"><img src="img/logo-white.png"></a>

    <ul class="nav">

        <!--        <li class="navbar hvr-underline-from-center"><a class="navLink" href="#">Portfolio</a></li>-->

        <li class="navbar hvr-underline-from-center"><a class="navLink" data-dom-cache=false href="about.php">About</a></li>
        <li class="navbar hvr-underline-from-center"><a class="navLink" data-dom-cache=false href="portfolio.php">Portfolio</a></li>

        <li class="navbar hvr-underline-from-center"><a class="navLink" data-dom-cache=false href="http://www.rglheygate.com/RobsBlog/">Blog</a></li>

        <li class="navbar hvr-underline-from-center"><a class="navLink" data-dom-cache=false href="contactform.php">Contact</a></li>
        <div class="arrow_box">
            <p>Dont Forget to </p>
            <p>Get In Touch</p>
        </div>
    </ul>



    <div class="mobile-nav-icon"><a id="nav-toggle" href="#"><span></span></a></div>


</nav>
</header>
<div class="clear"></div>



    <section class="contact-main">
        <div class="social-circles">
            <!--
                <div class="facebook hvr-bob">
                    <a class="ion-social-facebook facebook" href="https://www.facebook.com/Robbie-Heygate-UX-Developer-819055561545297/timeline/"></a>
                </div>
-->
            <div class="Twitter hvr-bob">
                <a class="ion-social-twitter twitter" href="https://twitter.com/RobbieHeygate?lang=en-gb"></a>
            </div>
            <div class="LinkedIn facebook hvr-bob">
                <a class="ion-social-linkedin linkedin" href="https://uk.linkedin.com/pub/robbie-heygate/101/471/499
"></a>
            </div>

        </div>
        <form method="post" action="contactform.php">
            <legend>Get in touch</legend>
            <label for="name">Name</label>
            <input class="details" name="name" placeholder="Type Here">

            <label for="email">Email</label>
            <input class="details" name="email" type="email" placeholder="Type Here">

            <label for="message">Message</label>
            <textarea name="message" placeholder="Type Here"></textarea>

            <label>What is 2+7?</label>
            <input class="validator" name="human" placeholder="Type Here">

            <input id="submit" name="submit" type="submit" value="Submit">

        </form>




    </section>


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



