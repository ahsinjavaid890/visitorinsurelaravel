@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')
@section('content')


<!-- Slider Start -->
<section class="banner-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
            </div>
            <div class="col-lg-6 col-md-12 headline_text">
                <div class="block">
                    <div class="divider mb-3"></div>
                    <h1 class="mb-4 mt-3 "><span class="main_title blue_text">Get in Touch With Us</span></h1>
                    
                    <p class="mb-4 pr-5 heading_tagline">We Would Love to Hear From You.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="contact-info pb-0 pt-5">
    <div class="container">
         <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6 right-green-seperator">
                <div class="contact-block mb-4 mb-lg-0">
                    <img class="contact-info-phone" src="{{ url('public/front/visitorinsure/images/contact-phone.png') }}">
                    <div class="contact-info-text">
                        Telephone: +1855-500-5041<br>
                        Fax: +1855-222-7444
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6 right-green-seperator">
                <div class="contact-block mb-4 mb-lg-0">
                    <img class="contact-info-email" src="{{ url('public/front/visitorinsure/images/contact-email.png') }}">
                    <div class="contact-info-text">
                        info@visitorguard.ca
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <img class="contact-info-address" src="{{ url('public/front/visitorinsure/images/contact-address.png') }}">
                    <div class="contact-info-text">
                        912 Isaiah Pl, Kitchener, ON N2E<br>0B6, Canada
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-wrap section">
    <div class="container">
        @if(session()->has('message'))
        <h1 class="mb-5 mt-3 text-left"><span class="title_h3">
            <span class="blue_text">{{ session()->get('message') }}</span>
        </span></h1>
        @endif 
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <form  class="contact__form " method="post" action="{{ url('contactus') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="mb-5 mt-3 text-left"><span class="second_title">
                                <span class="blue_text">Contact </span>
                                <span class="green_text">Us</span>      
                            </span></h1>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input required name="first_name" type="text" class="form-control" placeholder="Your Frist Name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input required name="lname" id="last_name" type="text" class="form-control" placeholder="Your Last Address">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input required name="email" id="email" type="email" class="form-control" placeholder="Your Email Address">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input required name="phone" id="phone" type="text" class="form-control" placeholder="Your Phone Number">
                            </div>
                        </div>
                    </div>

                    <div class="form-group-2 mb-4">
                        <label>Your Message</label>
                        <textarea required name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                    </div>

                    <div class="text-center">
                        <input class="btn btn-main btn-block" name="submit" type="submit" value="Send Messege">
                        <p class="mt-3 font-weight-bold">Or Use</p>
                        
                        <a class="contact-social-icon" target="_blank" href="https://www.facebook.com/visitorguard.ca"><img src="{{ url('public/front/visitorinsure/images/messenger.png') }}"></a> &nbsp; <a target="_blank" class="contact-social-icon" href="https://wa.me/+18555005041"><img src="{{ url('public/front/visitorinsure/images/whatsapp.png') }}"></a>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2898.7253269219955!2d-80.5233042829182!3d43.40367014419104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882bf5f33283b73d%3A0x11d11e5af5f01ae3!2s912%20Isaiah%20Pl%2C%20Kitchener%2C%20ON%20N2E%200B6%2C%20Canada!5e0!3m2!1sen!2s!4v1646568219267!5m2!1sen!2s" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection