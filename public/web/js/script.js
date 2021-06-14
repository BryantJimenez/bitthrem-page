const lang=$('html').attr('lang');
const messages={
	"es": {
		"no-results": "No hay resultados",
	},
	"en": {
		"no-results": "No results",
	}
};

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
				350:{
					items: 1,
					margin: 50,
					stagePadding: 50
				},
				425:{
					items: 1,
					margin: 10,
					stagePadding: 80
				},
				500:{
					items: 1,
					margin: 85,
					stagePadding: 100
				},
				575:{
					items: 1,
					margin: 85,
					stagePadding: 80
				},
				650:{
					items: 1,
					margin: 110,
					stagePadding: 125
				},
				750:{
					items: 1,
					margin: 115,
					stagePadding: 130
				},
				800:{
					items: 1,
					margin: 20,
					stagePadding: 120
				},
				900:{
					items: 1,
					margin: 20,
					stagePadding: 200
				},
				1050:{
					items: 2,
					margin: 30,
					stagePadding: 0
				},
				1250:{
					items: 2,
					margin: 120,
					stagePadding: 0
				},
				1440:{
					items: 2,
					margin: 140,
					stagePadding: 0
				},
				1500: {
					items: 2,
					margin: 200,
					stagePadding: 0
				},
				1600: {
					items: 2,
					margin: 260,
					stagePadding: 0
				},
				1670: {
					items: 2,
					margin: 320,
					stagePadding: 0
				},
				1750: {
					items: 2,
					margin: 380,
					stagePadding: 0
				},
				1800: {
					items: 2,
					margin: 440,
					stagePadding: 0
				},
				1900: {
					items: 2,
					margin: 490,
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

	// Autocomplete Jquery
	if ($('#autocomplete-helps').length) {
		$('#autocomplete-helps').autocomplete({
			zIndex: 2,
			serviceUrl: '/ayudas/buscar',
			params: {lang: lang},
			showNoSuggestionNotice: true,
			noSuggestionNotice: messages[lang]["no-results"],
			onSelect: function (suggestion) {
				window.location.href=suggestion.data
			}
		});
	}

	if ($('#autocomplete-articles').length) {
		$('#autocomplete-articles').autocomplete({
			zIndex: 2,
			serviceUrl: '/articulos/buscar',
			params: {lang: lang},
			showNoSuggestionNotice: true,
			noSuggestionNotice: messages[lang]["no-results"],
			onSelect: function (suggestion) {
				window.location.href=suggestion.data
			}
		});
	}

	// Menu vertical sticky
	if ($('.menu-categories').length) {
		if (window.pageYOffset>=450){
			$('.menu-categories').addClass('sticky-categories');
		} else {
			$('.menu-categories').removeClass('sticky-categories');
		}
	}
})(jQuery);

$('.section-card-guide .card-guide').click(function(event) {
	var element=$(this).data('element');
	$('.section-card-guide .card-guide').attr('data-active', false);
	$('.section-guide .info-guide').attr('data-show', false);
	$('.section-card-guide .card-guide[data-element="'+element+'"]').attr('data-active', true);
	$('.section-guide .info-guide[data-element="'+element+'"]').attr('data-show', true);
	var posicion=$('.section-guide').offset().top;
	$("html, body").animate({
		scrollTop: posicion-50
	}, 1500); 
});

$('.section-leaders a[country]').click(function(event) {
	var country=$(this).attr('country'), active=$(this).data('active');
	if (active) {
		$('.section-leaders a[country="'+country+'"]').data('active', false);
		$('.section-leaders a[country="'+country+'"]').attr('data-active', false);
		$('.section-leaders .user-elements[country="'+country+'"]:gt(2)').attr('data-show', false);
	} else {
		$('.section-leaders a[country="'+country+'"]').data('active', true);
		$('.section-leaders a[country="'+country+'"]').attr('data-active', true);
		$('.section-leaders .user-elements[country="'+country+'"]').attr('data-show', true);
	}
});

if ($('.menu-categories').length) {
	$(window).scroll(function() {
		if (window.pageYOffset>=450){
			$('.menu-categories').addClass('sticky-categories');
		} else {
			$('.menu-categories').removeClass('sticky-categories');
		}
	});
}