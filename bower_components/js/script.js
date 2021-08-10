var image_tracker = 'slider-one';

function change_three(){
	var image = document.getElementById('slides');
	if(image_tracker=='slider-five'){
		image.src='./images/slider/slider-two.png';
		image_tracker='slider-two';
		
 	}
	else{
		image.src='./images/slider/slider-one.png';
		image_tracker='slider-one';
	}
}
function change_two(){
	var image = document.getElementById('slides');
	if(image_tracker=='slider-four'){
		image.src='./images/slider/slider-five.png';
		image_tracker='slider-five';
		
 	}
	else{
		setInterval('change_three();',2000);
	}
}
function change_one(){
	var image = document.getElementById('slides');
	if(image_tracker=='slider-three'){
		image.src='./images/slider/slider-four.png';
		image_tracker='slider-four';
		
 	}
	else{
		setInterval('change_two();',2000);
	}
}

function change(){
	var image = document.getElementById('slides');
	if(image_tracker=='slider-one'){
		image.src='./images/slider/slider-three.png';
		image_tracker='slider-three';
	}
	else{
		setInterval('change_one();',2000);
	}
}                           
var timer = setInterval('change();',2000);

(function ($) { "use strict";
	
	/* ========================================================================= */
	/*	Page Preloader
	/* ========================================================================= */
	
	// window.load = function () {
	// 	document.getElementById('preloader').style.display = 'none';
	// }

	$(window).on("load",function(){
		$('#preloader').fadeOut('slow',function(){$(this).remove();});
	});




	/* ========================================================================= */
	/*	Portfolio Filtering Hook
	/* =========================================================================  */
	

	/* ========================================================================= */
	/*	Portfolio Filtering Hook
	/* =========================================================================  */

	var portfolio_item = $('.portfolio-items-wrapper');
	if (portfolio_item.length) {
		var mixer = mixitup(portfolio_item);
	};

	
	/* ========================================================================= */
	/*	Testimonial Carousel
	/* =========================================================================  */
 
	//Init the slider
	$('.testimonial-slider').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		infinite: true,
		arrows:false,
		autoplay: true,
  		autoplaySpeed: 2000,
  		responsive: [
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		  ]
	});


	/* ========================================================================= */
	/*	Clients Slider Carousel
	/* =========================================================================  */
 
	//Init the slider
	$('.clients-logo-slider').slick({
		infinite: true,
		arrows:false,
		autoplay: true,
  		autoplaySpeed: 2000,
  		slidesToShow: 5,
  		slidesToScroll: 1,
	});




	/* ========================================================================= */
	/*	Company Slider Carousel
	/* =========================================================================  */
	$('.company-gallery').slick({
		infinite: true,
		arrows:false,
		autoplay: true,
  		autoplaySpeed: 2000,
  		slidesToShow: 5,
  		slidesToScroll: 1,
	});
	
	
	/* ========================================================================= */
	/*	Awars Counter Js
	/* =========================================================================  */
	$('.counter').each(function() {
	  var $this = $(this),
	      countTo = $this.attr('data-count');
	  
	  $({ countNum: $this.text()}).animate({
	    countNum: countTo
	  },

	  {

	    duration: 1500,
	    easing:'linear',
	    step: function() {
	      $this.text(Math.floor(this.countNum));
	    },
	    complete: function() {
	      $this.text(this.countNum);
	      //alert('finished');
	    }

	  });  
	  
	  

	});




	/* ========================================================================= */
	/*   Contact Form Validating
	/* ========================================================================= */


	


/* ========================================================================= */
/*	On scroll fade/bounce effect
/* ========================================================================= */
	var scroll = new SmoothScroll('a[href*="#"]');

/* ========================================================================= */
	/*	Header Scroll Background Change
	/* ========================================================================= */	
	
$(window).scroll(function() {    
var scroll = $(window).scrollTop();
 //console.log(scroll);
if (scroll > 200) {
    //console.log('a');
    $(".navigation").addClass("sticky-header");
} else {
    //console.log('a');
    $(".navigation").removeClass("sticky-header");
}});


})(jQuery);



window.marker = null;

function initialize() {
    var map;

    var nottingham = new google.maps.LatLng(51.507351, -0.127758);

    var style = [
    	{"stylers": [{"hue": "#ff61a6"},{"visibility": "on"},{"invert_lightness": true},{"saturation": 40},{"lightness": 10}]}
	];

    var mapOptions = {
        // SET THE CENTER
        center: nottingham,

        // SET THE MAP STYLE & ZOOM LEVEL
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoom:9,

        // SET THE BACKGROUND COLOUR
        backgroundColor:"#000",

        // REMOVE ALL THE CONTROLS EXCEPT ZOOM
        zoom:17,
        panControl:false,
        zoomControl:true,
        mapTypeControl:false,
        scaleControl:false,
        streetViewControl:false,
        overviewMapControl:false,
        zoomControlOptions: {
            style:google.maps.ZoomControlStyle.LARGE
        }

    }
    map = new google.maps.Map(document.getElementById('map'), mapOptions);

    // SET THE MAP TYPE
    var mapType = new google.maps.StyledMapType(style, {name:"Grayscale"});
    map.mapTypes.set('grey', mapType);
    map.setMapTypeId('grey');

    //CREATE A CUSTOM PIN ICON
    var marker_image ='images/marker.png';
    var pinIcon = new google.maps.MarkerImage(marker_image,null,null, null,new google.maps.Size(25, 33));
	
    marker = new google.maps.Marker({
        position: nottingham,
        map: map,
        icon: pinIcon,
        title: 'navigator'
    });
}

google.maps.event.addDomListener(window, 'load', initialize);




                            