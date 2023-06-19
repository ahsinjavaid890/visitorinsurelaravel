<!DOCTYPE html>
<html lang="zxx">
<head>
	@yield('tittle')
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="content-language" content="en-ca">
	<meta charset="utf-8">
	<meta name="theme-color" content="#13eca1">
	<link rel="alternate" href="{{ url('') }}" hreflang="x-default" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ url('public/images') }}/{{ Cmf::get_store_value('favicon') }}" />
  <link rel="stylesheet" href="{{ url('public/front/visitorinsure/plugins/bootstrap/css/bootstrap.min.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" type="image/png" href="{{ url('public/images') }}/{{ Cmf::get_store_value('favicon') }}">
  <link rel="stylesheet" href="{{ url('public/front/visitorinsure/plugins/slick-carousel/slick/slick_all.min.css') }}">
  <link rel="stylesheet" href="{{ url('public/front/visitorinsure/css/style.min.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="top">
		@include('frontend.includes.header')
			@yield('content')
		@include('frontend.includes.footer')
		<script src="{{ asset('public/front/js/popper.min.js') }}"></script>
		<script src="{{ asset('public/front/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('public/front/js/jquery.meanmenu.js') }}"></script>
		<script src="{{ asset('public/front/js/wow.min.js') }}"></script>
		<script src="{{ asset('public/front/js/owl.carousel.js') }}"></script>
		<script src="{{ asset('public/front/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('public/front/js/parallax.min.js') }}"></script>
		<script src="{{ asset('public/front/js/jquery.mixitup.min.js') }}"></script>
		<script src="{{ asset('public/front/js/jquery.appear.js') }}"></script>
		<script src="{{ asset('public/front/js/odometer.min.js') }}"></script>
		<script src="{{ asset('public/front/js/jquery.ajaxchimp.min.js') }}"></script>
		<script src="{{ asset('public/front/js/form-validator.min.js') }}"></script>
		<script src="{{ asset('public/front/js/contact-form-script.js') }}"></script>
		<script src="{{ asset('public/front/js/custom.js') }}"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js"></script>
		<div class="compare_header_top">

		</div>


    <!-- Bootstrap 4.3.2 -->
    <!-- Slick Slider -->
    <script src="{{ url('public/front/visitorinsure/plugins/slick-carousel/slick/slick.min.js') }}"></script>


    <script>
    !function(s){"use strict";s(window).on("scroll",function(){s(window).scrollTop()>70?s(".backtop").addClass("reveal"):s(".backtop").removeClass("reveal")}),s(".portfolio-single-slider").slick({infinite:!0,arrows:!1,autoplay:!0,autoplaySpeed:2e3}),s(".clients-logo").slick({infinite:!0,arrows:!1,autoplay:!0,slidesToShow:5,slidesToScroll:1,autoplaySpeed:4e3,responsive:[{breakpoint:1024,settings:{slidesToShow:4,slidesToScroll:1,infinite:!0}},{breakpoint:900,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:2,slidesToScroll:1}}]}),s(".insurance-plans").slick({infinite:!0,arrows:!0,autoplay:!1,slidesToShow:4,slidesToScroll:1,prevArrow:"<img class='a-left control-c prev slick-prev' src='{{ url('public/front/visitorinsure/images/arrow.png') }}'>",nextArrow:"<img class='a-right control-c next slick-next' src='{{ url('public/front/visitorinsure/images/arrow.png') }}'>",autoplaySpeed:4e3,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:1,infinite:!0}},{breakpoint:900,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]}),s(".testimonials-plans").slick({infinite:!0,arrows:!0,autoplay:!1,slidesToShow:3,slidesToScroll:1,prevArrow:"<img class='a-left control-c prev slick-prev' src='{{ url('public/front/visitorinsure/images/arrow.png') }}'>",nextArrow:"<img class='a-right control-c next slick-next' src='{{ url('public/front/visitorinsure/images/arrow.png') }}'>",autoplaySpeed:4e3,responsive:[{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:1,infinite:!0}},{breakpoint:900,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]}),s(".testimonial-wrap").slick({slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!0,arrows:!1,autoplay:!0,vertical:!0,verticalSwiping:!0,autoplaySpeed:6e3,responsive:[{breakpoint:1024,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!0}},{breakpoint:900,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]}),s(".testimonial-wrap-2").slick({slidesToShow:2,slidesToScroll:2,infinite:!0,dots:!0,arrows:!1,autoplay:!0,autoplaySpeed:6e3,responsive:[{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:2,infinite:!0,dots:!0}},{breakpoint:900,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]})}(jQuery),slide_index=1;const files=["slide01.png","slide02.png","slide03.png","slide04.png","slide05.png","slide06.png","slide07.png","slide08.png"];function slide_changing(){$("#custom_slide").attr("src","public/front/visitorinsure/images/"+files[slide_index]),slide_index++,slide_index>7&&(slide_index=0),setTimeout(slide_changing,1e3)}setTimeout(slide_changing,1e3),$("#show_more_faq").click(function(){$(".faqs_section_part2").slideDown(500),$("#show_more_faq").hide(),$("#show_less_faq").show()}),$("#show_less_faq").click(function(){$(".faqs_section_part2").slideUp(500),$("#show_less_faq").hide(),$("#show_more_faq").show()});
    </script>


    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-194126682-1');
    </script>
    <script id="cookieinfo" src="https://cookieinfoscript.com/js/cookieinfo.min.js"></script>
  </body>
</html>
@yield('script')
