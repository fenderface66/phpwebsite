Array.prototype.move = function(old_index, new_index) {
	if (new_index >= this.length) {
		var k = new_index - this.length;
		while ((k--) + 1) {
			this.push(undefined);
		}
	}
	this.splice(new_index, 0, this.splice(old_index, 1)[0]);
	return this; // for testing purposes
};

var windowResize = {
	//Gather window width
	windowWidth: $(window).width(),
	//Remove slider classes from bar chart on mobile
	sliderRemover: function() {
		if (windowResize.windowWidth < 481) {
			$('.language').find('.slider').css({
				'right': '0',
				'opacity': '1'
			}).removeClass('slide-left');

		} else {
			$('.language').find('slider').addClass('slide-left').css({
				'right': '2000',
				'opacity': '0'
			});
		}
	},

	//Vary loading times dependent on device
	loadingScreen: function() {
		if (windowResize.windowWidth < 481) {
			setTimeout(function() {
				$('body').addClass('loaded');

			}, 6000);
		} else {
			setTimeout(function() {
				$('body').addClass('loaded');
			}, 3000);
		}
	},
	//Remove arrow box from mobile and small tablet widths (i.e widths with mobile nav)
	removeArrowBox: function() {
		if (windowResize.windowWidth < 787) {
			$('.arrow_box').remove();
		}
	},
	//Show navigation on larger screen widths
	navDisplay: function() {

		if ($(window).width() > 767) {
			$(".nav").show();
		} else if ($(window).width() < 768) {
			$(".nav").hide();
			$("#nav-toggle").removeClass('active');
			console.log('smaller');
		}
	},
	//Display boardgame button on waypoint for mobile widths rather than with drag/drop functionality for larger widths
	actionButton: function() {
		$('.section_4').waypoint(function(direction) {
			if (direction == 'down' && windowResize.windowWidth < 480) {
				$('.action-button').css({
					'display': 'block'
				});
			} else {
				$('.action-button').css({
					'display': 'none'
				});
			}
		}, {
			offset: '20%;'
		});
	}
};

var mobile = {
	windowWidth: $(window).width(),
	//Check if device is mobile
	isMobile: function() {
		return /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
	},
	//Activate mobile navigation slideToggle from clicking mobile-nav-icon
	mobNav: function() {
		$("#nav-icon1").on("click", function() {
			$(this).toggleClass("open");
			$('.nav').slideToggle('slow');
		});
	},

	mobileGallery: function() {
		if (mobile.windowWidth < 481) {
			var gallerySrc = [];
			var count = 0;
			$('.main-view img').hide();
			$('.card.front').click(function() {
				$('.overlay').show();
				var photoSelection = $(this).siblings('.back').find('.image-container');
				photoSelection.find('img').each(function() {
					gallerySrc.push($(this).attr('src'));

				})
				$('.main-view img').fadeIn('slow');
				$('.main-view').find('img').attr('src', gallerySrc[0]);

			})
			$('.main-view').on('swipeleft', function() {
				count += 1;
				if (count == (gallerySrc.length)) {
					count = 0;
				}
				$('.main-view img').animate({
					'marginLeft': '-100%',
					'opacity': 0
				}, 200);
				setTimeout(function() {
					$('.main-view img').css({
						'margin-left': '100%'
					});
					console.log('middle');
				}, 300);

				setTimeout(function() {
					$('.main-view img').animate({
						'marginLeft': '0',
						'opacity': 1
					}, 200);
					$('.main-view').find('img').attr('src', gallerySrc[count]);
					console.log('last');
				}, 300);
			})

			$('.main-view').on('swiperight', function() {
				count -= 1;
				if (count == -1) {
					count = (gallerySrc.length - 1);
				}

				$('.main-view img').animate({
					'marginLeft': '100%',
					'opacity': 0
				}, 200);
				setTimeout(function() {
					$('.main-view img').css({
						'margin-left': '-100%'
					});
					console.log('middle');
				}, 300);

				setTimeout(function() {
					$('.main-view img').animate({
						'marginLeft': '0',
						'opacity': 1
					}, 200);
					$('.main-view').find('img').attr('src', gallerySrc[count]);
					console.log('last');
				}, 300);

			})
		}
	},

	mobileFunctions: function() {
		//Run functions if not mobile
		if (!mobile.isMobile()) {
			new WOW().init();
			//Balloon side entry animation
			$('.section_2').waypoint(function(direction) {
				if (direction == 'down') {
					$('.balloon').css({
						'display': 'block'
					});
					$('.balloon').addClass('slideInRight').removeClass('slideOutRight');
					$(".balloon").animate({
						left: '70%'
					}, "slow");

				} else {
					$('.balloon').addClass('slideOutRight').removeClass('slideInRight').css({
						'display': 'none'
					});
					$(".balloon").animate({
						left: '130%'
					}, "slow");
				}

			}, {
				offset: '180%;'
			});

			//Back to Top functionality
			$('.ion-chevron-up').click(function() {
				$('html, body').animate({
					scrollTop: $('nav').offset().top
				}, 1000);
				$('.intro').replaceWith("<h1>Welcome Back</h1>");
				$('.point-down').replaceWith("");
				$('.guide').css({
					'top': '192px '
				});

			});

			//Change intro text on section2 waypoint
			$('.section_2').waypoint(function(direction) {
				if (direction == 'down') {
					$('.intro').replaceWith("<h1>Welcome Back</h1>");
					$('.point-down').replaceWith("");
					$('.guide').css({
						'top': '192px '
					});
					$('.arrow_box').addClass('ready');
				}

			}, {
				offset: '0%;'
			});

			//Make Contact section reminder fade in up when rescroll to section 1
			$('.section_1').waypoint(function(direction) {
				if (direction == 'up' && $('.arrow_box').hasClass('ready')) {
					$('.arrow_box').css({
						'display': 'block'
					}).addClass('animated').addClass('fadeInUp').delay(3000).queue(function(next) {
						$(this).addClass('fadeOutDown');
						next();
					});

				}

			}, {
				offset: '0%;'
			});

			/*Remove balloon on Section_2*/
			$('.section_2').waypoint(function(direction) {
				if (direction == 'down') {
					$('.balloon').addClass('bounceOutUp').removeClass('slideInRight').removeClass('bounceInUp');
					$(".balloon").animate({
						bottom: '1000px'
					}, "fast");
				}
			}, {
				offset: '100%;'
			});

			/*Making player draggable*/
			$(function() {
				$(".player").draggable();
			});
		} else if (mobile.isMobile()) {
			$('.bottom-title').removeClass('wow').removeClass('fadeInUp');
		}
	}
};
var boardGame = {
	answers: ['.home-answer', '.education-answer', '.music-answer', '.psych-answer', '.coding-answer', '.work-answer', '.film-answer', '.animals-answer', '.travel-answer', '.games-answer', '.mystery-answer'],
	playerMove: function playerMoveTest() {
		//Allow count to start on 0 index from first click
		var count = -1;

		function mover() {
			//With each click add one onto count
			count += 1;
			//iterate through answers using count variable and apply animation to relevant answer classes
			$(boardGame.answers[count]).css({
				'display': 'block',
				'z-index': '990'
			}).addClass('animated').addClass('fadeIn');
			//Move player in appropriate direction dependent on count
			if (count <= 2) {
				$('.player').animate({
					left: '+=25%'
				});
			} else if (count >= 3 && count <= 5) {
				$('.player').animate({
					top: '+=25%'
				});
			} else if (count >= 6 && count <= 8) {
				$('.player').animate({
					left: '-=25%'
				});
			} else if (count >= 9 && count <= 11) {
				$('.player').animate({
					top: '-=25%'
				});
				//Move action button away once count has reached end of answers array
				if (count == 11) {
					$('.action-button').animate({
						left: '-=350px'
					});
				}
			}

		}

		$(document).keydown(function(e) {
			if ($('.player').hasClass('ready')) {
				switch (e.which) {
					case 32:
						mover();
						$('.action-button').css({
							'transform': 'translate(0px, 5px'
						});
						break;
					default:
						return; // exit this handler for other keys
				}
				e.preventDefault(); // prevent the default action (scroll / move caret)
			}
		});

		$(document).keyup(function(e) {
			if ($('.player').hasClass('ready')) {
				switch (e.which) {
					case 32:
						$('.action-button').css({
							'transform': 'translate(0px, 0px'
						});
						break;
					default:
						return; // exit this handler for other keys
				}
				e.preventDefault(); // prevent the default action (scroll / move caret)
			}
		});
		$('.action-button').click(function() {
			mover();
		});
	},
	// Implement drag/drop functionality
	dragDrop: function() {
		$(".droppable-go").droppable({
			drop: function(event, ui) {
				$('.answer').removeClass('fadeIn').css({
					'z-index': '0'
				});
				$('.action-button').addClass('fadeIn').addClass('animated').css({
					'display': 'block'
				});
				$('.player').addClass('ready');
				$('.section_4').waypoint(function(direction) {
					if (direction == 'down') {
						$('.action-button').css({
							'display': 'block'
						});
					} else {
						$('.action-button').css({
							'display': 'none'
						});
					}
				}, {
					offset: '20%;'
				});

				$('.player').css({
					'left': '30px',
					'width': '20%'
				}).draggable("disable");
				$(this).addClass("animated").addClass('flipInX');

			}
		});
	}
};

//Reveal upwards chevron on section2 waypoint
function chevronUp() {
	$('.section_2').waypoint(function(direction) {
		if (direction == 'down') {
			$('.ion-chevron-up').css({
				'display': 'block',
				'top': '-20px'
			}).addClass('fadeInDown').removeClass('fadeOutUp');

		} else {
			$('.ion-chevron-up').addClass('fadeOutUp').removeClass('fadeInDown');
		}

	}, {
		offset: '0%;'
	});
}

var pageCheck = {
	fn: {
		about: function about() {
			if ($('#parallax-bg1').length) {
				console.log('running');
				$('body').addClass('timeline');
			}
		}
	},
	init: function init() {
		pageCheck.fn.about();
	}
}

var portfolioCards = {
	fn: {
		cardCenter: function cardClick() {

		}
	},
	init: function init() {

	}
}

//Initialize DOM
$(document).ready(function() {
	pageCheck.init();
	windowResize.loadingScreen();
	windowResize.sliderRemover();
	windowResize.removeArrowBox();
	windowResize.navDisplay();
	windowResize.actionButton();
	portfolioCards.init();
	//Initialize resize functions on resize
	$(window).resize(function() {
		windowResize.loadingScreen();
		windowResize.sliderRemover();
		windowResize.removeArrowBox();
		windowResize.actionButton();
		windowResize.navDisplay();
	});
	chevronUp();
	mobile.mobNav();
	mobile.mobileGallery();
	mobile.mobileFunctions();
	boardGame.playerMove();
	boardGame.dragDrop();
	$('.parent-container').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image',
		gallery:{
			enabled:true
		},
		overflowY: 'scroll',
		// other options
	});

	// Initialize popup as usual
	$('.image-link').magnificPopup({
		type: 'image',
		mainClass: 'mfp-with-zoom', // this class is for CSS animation below
		zoom: {
			enabled: true, // By default it's false, so don't forget to enable it

			duration: 300, // duration of the effect, in milliseconds
			easing: 'ease-in-out', // CSS transition easing function

			// The "opener" function should return the element from which popup will be zoomed in
			// and to which popup will be scaled down
			// By defailt it looks for an image tag:
			opener: function(openerElement) {
				// openerElement is the element on which popup was initialized, in this case its <a> tag
				// you don't need to add "opener" option if this code matches your needs, it's defailt one.
				return openerElement.is('img') ? openerElement : openerElement.find('img');
			}
		}

	});
});