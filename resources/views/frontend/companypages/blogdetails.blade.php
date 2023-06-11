@extends('frontend.layouts.main')
@section('content')
<!-- Slider Start -->
<section class="banner-blogs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
            </div>
            <div class="col-lg-6 col-md-12 headline_text">
                <div class="block">
                    <div class="divider mb-3"></div>
                    
                    <h1 class="mb-4 mt-3 ">
                        <span class="main_title blue_text">
                            {{ $data->title }}
                        </span>
                    </h1>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section class=" blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        <div class="single-blog-item">
                            <img src="images/blog/blog-1.jpg" alt="" class="img-fluid">

                            <div class="blog-item-content mt-5">
                                <div class="blog-item-meta mb-3">
                                    <span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-2"></i> Posted: {{ Cmf::date_format($data->created_at) }}</span>
                                    
                                    <img src="{{ url('public/images') }}/{{ $data->image }}" class="img-fluid blog_image"><br>
                                </div> 

                                {!! $data->content !!}

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-wrap mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form id="contact-form" class="contact__form " method="post" action="?action=post">
                    

                    <div class="row">


                        <div class="col-lg-12">
                            <h1 class="mb-5 mt-3 text-left"><span class="second_title">
                                <span class="blue_text">Write a  </span>
                                <span class="green_text">comment</span>     
                            </span></h1>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="fname" id="name" type="text" class="form-control" placeholder="Your Frist Name" required>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input name="lname" id="lname" type="text" class="form-control" placeholder="Your Last Address" required>
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" id="email" type="email" class="form-control" placeholder="Your Email Address" required>
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input name="phone" id="phone" type="text" class="form-control" placeholder="Your Phone Number">
                            </div>
                        </div>
                    </div>

                    <div class="form-group-2 mb-4">
                        <label>Your Message</label>
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message" required></textarea>
                    </div>

                    <div class="text-center">
                        <input class="btn btn-main btn-round-full" name="submit" type="submit" value="Submit Comment"></input>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection