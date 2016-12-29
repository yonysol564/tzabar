jQuery(document).scroll(function(){
    var y = jQuery(this).scrollTop();
    if(y > 200){
		jQuery(".go_to").addClass("show");
	}else{
		jQuery(".go_to").removeClass("show");
	}
});

﻿jQuery(document).ready(function($) {

	 var window_width = jQuery(window).width();


     jQuery("a.ajax_link").click(function(e){
         e.preventDefault();
         var post_type = jQuery(this).data("type");
         var treatmentid = jQuery(this).data("treatmentid");

         jQuery.post(
         	// see tip #1 for how we declare global javascript variables
         	ajax.ajaxurl,
         	{
         		action : 'get_before_after',
                post_type : post_type,
                treatmentid : treatmentid
         	},
         	function( response ) {
         		//jQuery(".ajax_container").slideUp(function(){
                    jQuery(".ajax_container").html(response.html);
                    //jQuery(".ajax_container").slideDown();
                //});

         	},
            "json"
         );

     });

	  if(jQuery("#contact_map").length) {
	    init_google_map();
	  }

	 if(jQuery("#contact_page_map").length) {
	    init_google_contact_map();
	  }



	if( typeof allPostsObject != 'undefined' ) {
		$('#autocomplete').autocomplete({
		    lookup: allPostsObject,
            appendTo : ".questions_search_rt .inner_wrap",
		    onSelect: function (suggestion) {
		        if(suggestion.data){
		        	window.location.assign(suggestion.data);
		        }
		    }
		});
	}

	//בחזרה למעלה
	$('.go_to_bg').click(function(){
		$('html, body').animate({scrollTop:0}, 'slow');
	});
	//דף קטגוריה - טאבים
	$('.catPageTopBtns_a').length && (function(){
		$('.catPageTopBtns_a').each(function(i){
			$(this).click(function(e){
				e.preventDefault();
				$('.catPageTopBtns_a.active').removeClass('active');
				$(this).addClass('active');
				$('.catPageCircles_ul.active').removeClass('active');
				$('.catPageCircles_ul').eq(i).addClass('active');
			});
		}).first().click();
	}());
	//subcategory.html - גלריות
	$('.swiper-container').length && (function(){
		var swiper = [];
		$('.swiper-container').each(function(index){
			var self			= $(this);
			var itemNum			= parseInt(self.attr('data-items'));
			var itemAutoplay	= self.attr('data-autoplay') || false;
			var itemArrows		= self.attr('data-arrows') || false;
			var itemPagination	= self.attr('data-pagination') || false;
			var breakpoints_767	= parseInt(self.attr('data-breakpoints-767'));
			var breakpoints_599	= parseInt(self.attr('data-breakpoints-599'));
			var centeredSlides	= self.attr('data-center-slides') || false;
			var breakpoints = {};
			if(breakpoints_767){
				breakpoints['767'] = {
								slidesPerView	: breakpoints_767,
								centeredSlides	: false,
								loop			: false
							}
			}
			if(breakpoints_599){
				breakpoints['599'] = {
								slidesPerView 	: breakpoints_599,
								centeredSlides	: centeredSlides,
								loop			: centeredSlides
							}
			}
			swiper[index] = self.swiper({
				autoplay			: itemAutoplay,
				slidesPerView		: itemNum,
				calculateHeight		: true,
				updateOnImagesReady	: true,
				preventClicks		: false,
				preventClicksPropagation : false,
				grabCursor			: true,
				keyboardControl		: true,
				pagination			: itemPagination ? $('.pagination',this) : null,
				paginationClickable	: true,
				nextButton			: itemArrows ? $(this).parent().find('.next') : null,
				prevButton			: itemArrows ? $(this).parent().find('.prev') : null,
				breakpoints			: breakpoints
			});
		});
	}());
	//דף לפני אחרי - טאבים
	$('.beforeAfter_tabs_btn').length && (function(){
		$('.beforeAfter_tabs_btn').each(function(i){
			$(this).click(function(e){
				e.preventDefault();
				$('.beforeAfter_tabs_btn.active').removeClass('active');
				$(this).addClass('active');
				$('.tabs.active').removeClass('active');
				$('.tabs').eq(i).addClass('active');
				$('.beforeAfter_wrap.active').removeClass('active');
				$('.beforeAfter_wrap').eq(i).addClass('active');
			});
		}).first().click();
	}());
	//מובייל - טאבים בפוטר
	$('.footer button.title1').each(function(i){
		var self = $(this);
		self.click(function(){
			if(self.hasClass('active')){
				self.removeClass('active');
				$('.js_openCloseDIV').eq(i).slideUp().removeClass('active');
			}else{
				$('.footer button.active').removeClass('active');
				$('.js_openCloseDIV.active').slideUp().removeClass('active');
				self.addClass('active');
				$('.js_openCloseDIV').eq(i).slideDown().addClass('active');
			};
		});
	});
	//מובייל - תפריט ראשי
	$('.menu_icon').click(function(){
		$('html').toggleClass('mobileMenuIsOpen');
	});

  	jQuery(".ask").click(function(e) {
  		e.preventDefault();
    	 jQuery('.modal').modal();
  	});

  	jQuery(".meet_doctor_modal").click(function(e) {
  		e.preventDefault();
    	 jQuery('.meet_doctor_popup').modal();
  	});

  	jQuery(".open_media").click(function(e) {
  		e.preventDefault();
  		var youtube_id = jQuery(this).data("youtube");
  		console.log(youtube_id);
  		jQuery('.youtube_iframe').attr('src' , 'https://www.youtube.com/embed/'+youtube_id);

    	jQuery('.media_popup').modal();
  	});


	jQuery('.gallery,.beforeAfter_item_wrap,.homeSwiperBeforeAfterWrap').magnificPopup({
		delegate: 'a',
		removalDelay: 800,
		gallery:{
		  enabled:true
		},
		midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
	});

	//Open dropdown menu effect
	if (window_width > 768) {
		jQuery(".nav > ul > li.menu-item-has-children").hoverIntent(showSubMenu, hideSubMenu);
	}

	//before_after.html - isotope
	$('.isotope').length && (function(){

        var initialFilter = jQuery(".filters .tabs li:first-child button").data("filter");

		$('.isotope').isotope({
			itemSelector: '.element-item',
            filter: initialFilter,
            isOriginLeft: false,
            transformsEnabled: false
		});
		$('.filters').on('click', 'button', function() {
			var filterValue = $(this).attr('data-filter');
			$('.filters button.selected').removeClass('selected');
			$(this).addClass('selected');
			$('.isotope').isotope({ filter: filterValue });
		});
	}());
	//דף לפני אחרי - טאבים
	$('.beforeAfter_tabs_btn').length && (function(){
		$('.beforeAfter_tabs_btn').each(function(i){
			$(this).click(function(e){
				e.preventDefault();
				$('.beforeAfter_tabs_btn.active').removeClass('active');
				$(this).addClass('active');
				$('.tabs.active').removeClass('active');
				$('.tabs').eq(i).addClass('active');
				//$('.beforeAfter_wrap.active').removeClass('active');
				//$('.beforeAfter_wrap').eq(i).addClass('active');
			});
		}).first().click();
	}());


});

jQuery(window).load(function(){
    jQuery(".filters .tabs li:first-child button").first().click();
});

function showSubMenu(){
	var dropdown = jQuery(this).find("ul.sub-menu");
	dropdown.slideDown(300);
}


function hideSubMenu() {
	var dropdown = jQuery(this).find("ul.sub-menu");
	dropdown.slideUp(300);
}

function init_google_map(){
  map = new google.maps.Map(document.getElementById('contact_map'), {
      zoom: 13,
      scaleControl: false,
      scrollwheel: false,
      draggable: false,
      center: new google.maps.LatLng(locations[1],locations[2])
    });
    var infowindow = new google.maps.InfoWindow();
    var marker;
    marker = new google.maps.Marker({
    position: new google.maps.LatLng(locations[1], locations[2]),
    map: map,
    animation: google.maps.Animation.DROP
  });
}

function init_google_contact_map(){
  map = new google.maps.Map(document.getElementById('contact_page_map'), {
      zoom: 17,
	  scaleControl: false,
      scrollwheel: false,
      center: new google.maps.LatLng(locations[1],locations[2])
    });
    var infowindow = new google.maps.InfoWindow();
    var marker;
    marker = new google.maps.Marker({
    position: new google.maps.LatLng(locations[1], locations[2]),
    map: map,
    animation: google.maps.Animation.DROP
  });
}
