 (function($) {

 	"use strict";
	$(document).ready(function() {
	 
		//jQuery for page scrolling feature - requires jQuery Easing plugin
	
			$('a.page-scroll').on('click', function(event) {
				var $anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1500, 'easeInOutExpo');
				event.preventDefault();
			});
	

		
		//LightCase
		
			$('a[data-rel^=lightcase]').lightcase();
		

		//Js code for search box 
		
			$(".first_click").on("click", function(){
				$(".menu-right-option").addClass("search_box");	 
			});
			$(".second_click").on("click", function(){
				$(".menu-right-option").removeClass("search_box"); 
			});	
			
		
		//countdown 
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
		
		
			
		
		//Sponsors swiper
		
		var swiper = new Swiper('.sponsors-container', {
			pagination: '.swiper-pagination',
			slidesPerView: 4,
			spaceBetween: 20,
			autoplay: 3000,
			paginationClickable: true,
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			 breakpoints: {
				1024: {
					slidesPerView: 3,
					spaceBetween: 20
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 30
				},
				640: {
					slidesPerView: 1,
					spaceBetween: 20
				},
				400: {
					slidesPerView: 1,
					spaceBetween: 10
				}
			}
		});
		
		
		//testimonial swiper
		
		var swiper = new Swiper('.testimonial-container', {
			pagination: '.swiper-pagination',
			slidesPerView: 3,
			spaceBetween: 20,
			autoplay: 3000,
			paginationClickable: true,
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			 breakpoints: {
				1024: {
					slidesPerView: 3,
					spaceBetween: 20
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 30
				},
				640: {
					slidesPerView: 1,
					spaceBetween: 20
				},
				400: {
					slidesPerView: 1,
					spaceBetween: 10
				}
			}
		});
		
		
		//people say container swiper
		
		var swiper = new Swiper('.people-say-container', {
			pagination: '.swiper-pagination',
			slidesPerView: 1,
			spaceBetween: 25,
			autoplay: false,
			paginationClickable: true,
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			 breakpoints: {
				1024: {
					slidesPerView: 1,
					spaceBetween: 20
				},
				768: {
					slidesPerView: 1,
					spaceBetween: 30
				},
				640: {
					slidesPerView: 1,
					spaceBetween: 20
				},
				400: {
					slidesPerView: 1,
					spaceBetween: 10
				}
			}
		});
		
		//Pre-Loader
	
			
			$("#loading").delay(2000).fadeOut(500);
			$("#loading-center").on("click",function() {
			$("#loading").fadeOut(500);
			});
		
		
		
		//Scroll Top Top 
		
		var link,
		toggleScrollToTopLink = function(){
			
			if($("body").scrollTop() > 0 || $("html").scrollTop() > 0){
				link.fadeIn(400);
			}else{
				link.fadeOut(400);
			}
			
		};
		
			link = $(".scroll-img");
			
			$(window).scroll(toggleScrollToTopLink);
			
			toggleScrollToTopLink();
			
			link.on("click", function(){
				
				$("body").animate({scrollTop: 0});
				$("html").animate({scrollTop: 0});
				
			});
	
		
		//Menu Fixed Top
		
			var fixed_top = $(".menu-scroll");

			$(window).on('scroll', function() {
				
				if( $(this).scrollTop() > 100 ){	
					fixed_top.addClass("menu-fixed animated fadeInDown");
				}
				else{
					fixed_top.removeClass("menu-fixed animated fadeInDown");
				}
				
			});
			
	
			//Pricing Slider
		
			$('.nstSlider').nstSlider({
				"left_grip_selector": ".leftGrip",
				"right_grip_selector": ".rightGrip",
				"value_bar_selector": ".bar",
				"value_changed_callback": function(cause, leftValue, rightValue) {
					$(this).parent().find('.leftLabel').text(leftValue);
					$(this).parent().find('.rightLabel').text(rightValue);
				}
			});

			
		
		
		
	//Flex Slider
			
		$(window).load(function() {
		  // The slider being synced must be initialized first
		  $('#carousel').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			itemWidth: 74,
			itemMargin: 5,
			asNavFor: '#slider'
		  });
		 
		  $('#slider').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			sync: "#carousel"
		  });
		});
		
		

	//nst Slider
	
		$('.nstSlider').nstSlider({
			"left_grip_selector": ".leftGrip",
			"right_grip_selector": ".rightGrip",
			"value_bar_selector": ".bar",
			"value_changed_callback": function(cause, leftValue, rightValue) {
				$(this).parent().find('.leftLabel').text(leftValue);
				$(this).parent().find('.rightLabel').text(rightValue);
			}
		});
        

		
	});	

})(jQuery);





	


