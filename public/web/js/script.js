(function($) {

	"use strict";

	$('[data-toggle="tooltip"]').tooltip();

 	// loader
 	var loader = function() {
 		setTimeout(function() { 
 			if($('#loader').length > 0) {
 				$('#loader').removeClass('show');
 			}
 		}, 1);
 	};
 	loader();

 	$('nav .dropdown').hover(function(){
 		var $this = $(this);
		// 	 timer;
		// clearTimeout(timer);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		// $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = $(this);
			// timer;
		// timer = setTimeout(function(){
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			// $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
			$this.find('.dropdown-menu').removeClass('show');
		// }, 100);
	});

	// scroll
	var scrollWindow = function() {
		$(window).scroll(function(){
			var $w = $(this),
			st = $w.scrollTop(),
			navbar = $('.fixed-navbar'),
			sd = $('.js-scroll-wrap');

			if (st > 150) {
				if ( !navbar.hasClass('scrolled') ) {
					navbar.addClass('scrolled');	
				}
			} 
			if (st < 150) {
				if ( navbar.hasClass('scrolled') ) {
					navbar.removeClass('scrolled sleep');
				}
			} 
			if ( st > 350 ) {
				if ( !navbar.hasClass('awake') ) {
					navbar.addClass('awake');	
				}
				
				if(sd.length > 0) {
					sd.addClass('sleep');
				}
			}
			if ( st < 350 ) {
				if ( navbar.hasClass('awake') ) {
					navbar.removeClass('awake');
					navbar.addClass('sleep');
				}
				if(sd.length > 0) {
					sd.removeClass('sleep');
				}
			}
		});
	};
	scrollWindow();

	// Owl Carousel
	if($('.advantage-carousel').length) {
		$('.advantage-carousel').owlCarousel({
			autoplay: true,
			autoplayTimeout: 5000,
			autoplayHoverPause: true,
			autoHeight: true,
			center: true,
			loop: true,
			items: 2,
			margin: 30,
			stagePadding: 0,
			nav: true,
			dots: false,
			navText: ['<span class="fa fa-angle-left">', '<span class="fa fa-angle-right">'],
			responsive:{
				0:{
					items: 1,
					margin: 10,
					stagePadding: 20
				},
				500:{
					items: 1,
					margin: 85,
					stagePadding: 100
				},
				800:{
					items: 2,
					margin: 30,
					stagePadding: 0
				}
			}
		});
	}

	if($('.features-carousel').length) {
		$('.features-carousel').owlCarousel({
			autoplay: true,
			autoplayTimeout: 5000,
			autoplayHoverPause: true,
			autoHeight: true,
			center: false,
			loop: true,
			items: 1,
			margin: 122,
			stagePadding: 60,
			nav: false,
			dots: true,
			navText: ['<span class="fa fa-angle-left">', '<span class="fa fa-angle-right">'],
			responsive:{
				0:{
					items: 1,
					margin: 85,
					stagePadding: 20
				},
				376:{
					items: 1,
					margin: 122,
					stagePadding: 60
				}
			}
		});
	}

	// Counter
	if ($('.section-counter').length) {
		$('.section-counter .count').counterUp({
			time: 3000
		});
	};
})(jQuery);

$('.section-card-guide .card-guide').click(function(event) {
	var element=$(this).data('element');
	$('.section-card-guide .card-guide').attr('data-active', false);
	$('.section-guide .info-guide').attr('data-show', false);
	$('.section-card-guide .card-guide[data-element="'+element+'"]').attr('data-active', true);
	$('.section-guide .info-guide[data-element="'+element+'"]').attr('data-show', true);
	var posicion=$('.section-guide').offset().top;
    $("html, body").animate({
        scrollTop: posicion
    }, 1500); 
});