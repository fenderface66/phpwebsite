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

