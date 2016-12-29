var locations;
var banner_autoplay;

jQuery( window ).load(function() {
    jQuery( "body" ).addClass('loaded');
});


jQuery(document).ready(function(){

    create_home_slider();
    create_customer_slider();
    create_service_slider();


  //jQuery.scrollSpeed(180, 900);

  var window_width = jQuery( window ).width();
  if(jQuery("#contact_map").length) {
    init_google_map();
  }


jQuery( ".search_btn" ).click(function(e) {
    e.preventDefault();
    jQuery( ".search_div" ).slideToggle( "fast", function() {
      // Animation complete.
    });
  });

  jQuery('.share_sidebar_inner a').click(function() {
   // var social_title = jQuery(this).data('title');
    var social_img = jQuery(this).data('img');
    jQuery('meta[property="og:image"]').attr('content', social_img);
  });


  jQuery('.fixed_con').click(function(e) {
    e.preventDefault();
    if(jQuery(this).css("margin-left") == "253px")
    {
        jQuery('#fixed_form').animate({"margin-left": '-=253'});
        jQuery('.fixed_con').animate({"margin-left": '-=253'});
    }
    else
    {
        jQuery('#fixed_form').animate({"margin-left": '+=253'});
        jQuery('.fixed_con').animate({"margin-left": '+=253'});
    }


  });



  jQuery('.logo_box a').click(function(e) {
    var url = jQuery(this).data('url');
    if (url === false) {
      e.preventDefault();
    }
  });

	jQuery(document).foundation();


});




function create_home_slider(){
  home_slider = jQuery(".home_banner_wrap, .page_banner_wrap");
  home_slider.slick({
    infinite: true,
    speed: 500,
    autoplay: banner_autoplay,
    fade: true,
    rtl: true,
    autoplaySpeed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    focusOnSelect: false,
    arrows: true,
    prevArrow: '<div class="carousel-prev carousel-arr"></div>',
    nextArrow: '<div class="carousel-next carousel-arr"></div>',
    responsive: [
      {
        breakpoint: 767,
        settings: {
          arrows:false,
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          dots:false,
          slidesToShow: 1
        }
      }
    ]
  });
}

function create_service_slider(){
  home_slider = jQuery(".service_slider");
  home_slider.slick({
    infinite: true,
    speed: 500,
    autoplay: false,
    fade: false,
    rtl: true,
    autoplaySpeed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    focusOnSelect: false,
    arrows: true,
    prevArrow: '<div class="carousel-prev carousel-arr"></div>',
    nextArrow: '<div class="carousel-next carousel-arr"></div>',
    responsive: [
      {
        breakpoint: 767,
        settings: {
          arrows:false,
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          dots:false,
          slidesToShow: 1
        }
      }
    ]
  });
}

function create_customer_slider(){
  service_slider = jQuery(".customer_slider");
  service_slider.slick({
    infinite: true,
    speed: 500,
    autoplay: true,
    fade: false,
    rtl: true,
    autoplaySpeed: 2000,
    slidesToShow: 6,
    slidesToScroll: 1,
    focusOnSelect: false,
    arrows: true,
    prevArrow: '<div class="carousel-prev carousel-arr"></div>',
    nextArrow: '<div class="carousel-next carousel-arr"></div>',
    responsive: [
      {
        breakpoint: 767,
        settings: {
          arrows:false,
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          dots:false,
          slidesToShow: 1
        }
      }
    ]
  });
}

function fix_top_menu() {
   var window_width = jQuery( window ).width();
    if (window_width > 640) {
     //  console.log('bigeerrr 640');
      jQuery( ".bg_image" ).insertBefore( "nav" );
    }

    else{
      // console.log('640');
       jQuery( "nav" ).insertBefore( ".bg_image" );
    }
}

function init_google_map(){
  map = new google.maps.Map(document.getElementById('contact_map'), {
      zoom: 17,
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
