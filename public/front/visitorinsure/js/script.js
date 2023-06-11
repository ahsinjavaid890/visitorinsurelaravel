


;(function ($) {

	'use strict';
	
 // SCROLL TO TOP
  
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > 70) {
        $('.backtop').addClass('reveal');
    } else {
        $('.backtop').removeClass('reveal');
    }
});
 
	$('.portfolio-single-slider').slick({
		infinite: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000

	});

	$('.clients-logo').slick({
		infinite: true,
		arrows: false,
		autoplay: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplaySpeed: 4000,
		responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow:4,
		        slidesToScroll: 1,
		        infinite: true,
		      }
		    },
		    {
		      breakpoint: 900,
		      settings: {
		        slidesToShow:3,
		        slidesToScroll: 1
		      }
		    },{
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1
		      }
		    }
		  
  		]
	});

	$('.insurance-plans').slick({
		infinite: true,
		arrows: true,
		autoplay: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		prevArrow:"<img class='a-left control-c prev slick-prev' src='images/arrow.png'>",
		nextArrow:"<img class='a-right control-c next slick-next' src='images/arrow.png'>",
		autoplaySpeed: 4000,
		responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow:3,
		        slidesToScroll: 1,
		        infinite: true,
		      }
		    },
		    {
		      breakpoint: 900,
		      settings: {
		        slidesToShow:2,
		        slidesToScroll: 1
		      }
		    },{
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1
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
	
	
	$('.testimonials-plans').slick({
		infinite: true,
		arrows: true,
		autoplay: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		prevArrow:"<img class='a-left control-c prev slick-prev' src='images/arrow.png'>",
		nextArrow:"<img class='a-right control-c next slick-next' src='images/arrow.png'>",
		autoplaySpeed: 4000,
		responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow:2,
		        slidesToScroll: 1,
		        infinite: true,
		      }
		    },
		    {
		      breakpoint: 900,
		      settings: {
		        slidesToShow:2,
		        slidesToScroll: 1
		      }
		    },{
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 1
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



	$('.testimonial-wrap').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
		dots: true,
		arrows: false,
		autoplay: true,
		vertical:true,
		verticalSwiping:true,
		autoplaySpeed: 6000,
		responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow:1,
		        slidesToScroll: 1,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 900,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    },{
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
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

	$('.testimonial-wrap-2').slick({
		slidesToShow: 2,
		slidesToScroll: 2,
		infinite: true,
		dots: true,
		arrows:false,
		autoplay: true,
		autoplaySpeed: 6000,
		responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow:2,
		        slidesToScroll:2,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 900,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    },{
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
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



		


})(jQuery);





slide_index=1;
const files = ["slide01.png", "slide02.png", "slide03.png", "slide04.png", "slide05.png", "slide06.png", "slide07.png", "slide08.png"];

setTimeout(slide_changing, 1000);
function slide_changing(){  $('#custom_slide').attr("src", 'images/'+files[slide_index]);  slide_index++; if(slide_index>7){ slide_index=0;} setTimeout(slide_changing, 1000); }



$("#show_more_faq").click(function(){
  $(".faqs_section_part2").slideDown(500);
  $("#show_more_faq").hide();
  $("#show_less_faq").show();
});

$("#show_less_faq").click(function(){
  $(".faqs_section_part2").slideUp(500);
  $("#show_less_faq").hide();
  $("#show_more_faq").show();
});

