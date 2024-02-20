@php
    $url = request()->segment(count(request()->segments()));
    $settings = DB::table('site_settings')->where('smallname' , 'visitorinsure')->first();
@endphp
<footer class="footer section gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mr-auto col-sm-12">
                <div class="widget mb-5 mb-lg-0">
                    <div class="logo mb-4">
                        <img src="{{ url('public/front/visitorinsure/images/logo.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="{{ url('') }}">Home</a></li>
                            <li><a href="{{ url('blogs') }}">Blog</a></li>
                            <li><a href="{{ url('privacypolicy') }}">Privacy Policy</a></li>
                            <li><a href="{{ url('contactus') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12">
                <div class="widget widget_links mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">Insurance</h4>
                    <div class="mb-4"><img src="{{ url('public/front/visitorinsure/images/divider.png') }}" class="divider_line"></div>

                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="{{ url('super-visa-insurance') }}">
                                <img class="icon" src="{{ url('public/front/visitorinsure/images/footer/icon1.png') }}"> Super Visa Insurance
                            </a>
                        </li>
                        <li><a href="{{ url('visitor-insurance') }}"><img class="icon" src="{{ url('public/front/visitorinsure/images/footer/icon2.png') }}"> Visitor Insurance</a></li>
                        <li><a href="{{ url('student-insurance') }}"><img class="icon" src="{{ url('public/front/visitorinsure/images/footer/icon3.png') }}"> Student Insurance</a></li>
                        <li><a href="{{ url('single-trip-insurance') }}"><img class="icon" src="{{ url('public/front/visitorinsure/images/footer/icon4.png') }}"> Single Trip Insurance </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12">
                <div class="widget widget_links mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">Useful Links</h4>
                    <div class="mb-4"><img src="{{ url('public/front/visitorinsure/images/divider.png') }}" class="divider_line"></div>
                    
                    <ul class="list-unstyled footer-menu lh-35">
                        <li><a href="#"><img class="icon" src="{{ url('public/front/visitorinsure/images/footer/icon7.png') }}"> Facebook</a></li>
                        <li><a href="#"><img class="icon" src="{{ url('public/front/visitorinsure/images/footer/icon8.png') }}"> Twitter</a></li>
                        <li><a href="#"><img class="icon" src="{{ url('public/front/visitorinsure/images/footer/icon9.png') }}"> LinkedIn </a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="widget widget_links mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">Contact Us</h4>
                    <div class="mb-4"><img src="{{ url('public/front/visitorinsure/images/divider.png') }}" class="divider_line"></div>
                    
                    <ul class="list-unstyled footer-menu lh-35">
                        <li><img class="icon" src="{{ url('public/front/visitorinsure/images/footer/icon10.png') }}">{{ $settings->site_phonenumber }}</li>
                        <li><img class="icon" src="{{ url('public/front/visitorinsure/images/footer/icon12.png') }}">{{ $settings->site_address }}</li>
                        <li><img class="icon" src="{{ url('public/front/visitorinsure/images/footer/icon13.png') }}">{{ $settings->site_email }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="container-line-white"></div>
<footer class="footer gray-bg pt-2 pb-2">
    <div class="container">
        <div class="footer-btm">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="copyright">
                        VisitorGuard.ca &copy; 2015 - <?php echo date("Y")?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <a class="backtop js-scroll-trigger" href="#top">
                        <span class="arrow_up"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>