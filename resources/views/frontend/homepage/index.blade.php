@extends('frontend.layouts.main')
@section('tittle')
<title>Visitor Insure Insurance For Canadian | Get Instant Online Quotes For Insurance</title>
<meta name="description" content="">
<meta name="keywords" content="">
@endsection
@section('content')
<section class="banner">
   <div class="container">
      <div class="row">
         <div class="col-lg-7 col-md-12">
            <div class="block">
               <div class="divider mb-3"></div>
               <h1 class="mb-4 mt-3 "><span class="main_title">Enjoy Journey</span></h1>
               
               <p class="mb-4 pr-5 heading_tagline">Travel insurance offers flexible, affordable emergency medical coverage to visitor.</p>
            </div>
         </div>
         <div class="col-lg-5 col-md-12">
               <div class="divider mb-5"></div>

               <div class="feature-item mb-5">
                  <div class="title_h2">
                     <span class="blue_text">Receive a free quote on </span>
                     <span class="green_text">Travel Insurance.</span>
                  </div>
                  <div class="row premium_listing">
                     <div class="col-lg-3 col-md-3 col-xl-3">
                     <img src="{{ url('public/front/visitorinsure/images/insurance01.png') }}" class="img-fluid"><br>
                     </div>
                     <div class="col-lg-9 col-md-9 col-xl-9">
                        <div class="title_h3">
                           <span class="blue_text">Super Visa </span>
                           <span class="green_text">Insurance</span>
                        </div>
                        <p class="mb-4">Super Visa Insurance is needed when you apply for a Super Visa for your family, parents or grand-parents.</p>
                        <a href="{{ url('super-visa-insurance') }}" class="btn btn-main btn-round-full">Get a Quote &nbsp;<strong>&rarr;</strong></a>
                     </div>
                  </div>
                  <div class="row premium_listing">
                     <div class="col-lg-3 col-md-3 col-xl-3">
                     <img src="{{ url('public/front/visitorinsure/images/insurance02.png') }}" class="img-fluid"><br>
                     </div>
                     <div class="col-lg-9 col-md-9 col-xl-9">
                        <div class="title_h3">
                           <span class="blue_text">Visitor </span>
                           <span class="green_text">Insurance</span>
                        </div>
                        <p class="mb-4">Visitor Insurance benefits you throughout journey and protect your bags and possessions while traveling.</p>
                        <a href="{{ url('visitor-insurance') }}" class="btn btn-main btn-round-full">Get a Quote &nbsp;<strong>&rarr;</strong></a>
                     </div>
                  </div>

                  <div class="title_h2 text-center mt-2">
                     <a href="{{ url('product') }}" class="title_h3"><span class="blue_text"><u>See All</u></span></a>
                  </div>

               </div>

         </div>
      </div>
   </div>
</section>
<section class="clients">
   <div class="container">
      <div class="row clients-logo">
         <div class="col-lg-2">
            <div class="client-thumb">
               <img src="{{ url('public/front/visitorinsure/images/partner1.png') }}" alt="" class="img-fluid">
            </div>
         </div>
         <div class="col-lg-2">
            <div class="client-thumb">
               <img src="{{ url('public/front/visitorinsure/images/partner2.png') }}" alt="" class="img-fluid">
            </div>
         </div>
         <div class="col-lg-2">
            <div class="client-thumb">
               <img src="{{ url('public/front/visitorinsure/images/partner3.png') }}" alt="" class="img-fluid">
            </div>
         </div>
         <div class="col-lg-2">
            <div class="client-thumb">
               <img src="{{ url('public/front/visitorinsure/images/partner4.png') }}" alt="" class="img-fluid">
            </div>
         </div>
         <div class="col-lg-2">
            <div class="client-thumb">
               <img src="{{ url('public/front/visitorinsure/images/partner5.png') }}" alt="" class="img-fluid">
            </div>
         </div>
         <div class="col-lg-2">
            <div class="client-thumb">
               <img src="{{ url('public/front/visitorinsure/images/partner6.png') }}" alt="" class="img-fluid">
            </div>
         </div>
         <div class="col-lg-2">
            <div class="client-thumb">
               <img src="{{ url('public/front/visitorinsure/images/partner7.png') }}" alt="" class="img-fluid">
            </div>
         </div>
         <div class="col-lg-2">
            <div class="client-thumb">
               <img src="{{ url('public/front/visitorinsure/images/partner8.png') }}" alt="" class="img-fluid">
            </div>
         </div>
         <div class="col-lg-2">
            <div class="client-thumb">
               <img src="{{ url('public/front/visitorinsure/images/partner9.png') }}" alt="" class="img-fluid">
            </div>
         </div>
      </div>
   </div>
</section>



<section class="section insurance_plan d-none d-lg-block">
   <div class="container">
      <div class="title_h1 text-center">
         
      </div>
      <h1 class="mb-5 mt-3 text-center"><span class="second_title">
         <span class="blue_text">Our Insurance </span>
         <span class="green_text">Plans</span>     
      </span></h1>
      <div class="row insurance-plans mt-5">
         <div class="row premium_listing_slider text-center">
            <div class="col-lg-12 col-md-12 col-xl-12">
               <a href="{{ url('super-visa-insurance') }}">
                  <img src="{{ url('public/front/visitorinsure/images/insurance01.png') }}" class="img-fluid"><br>
                  <div class="title_h2 mt-3 mb-2">
                     <span class="blue_text">Super Visa </span>
                     <span class="green_text">Insurance</span>
                  </div>
                  <p class="mb-4">Super Visa Insurance is needed when you apply for a Super Visa for your family, parents or grand-parents.</p>
               </a>
            </div>
         </div>
         <div class="row premium_listing_slider text-center">
            <div class="col-lg-12 col-md-12 col-xl-12">
               <a href="{{ url('visitor-insurance') }}">
                  <img src="{{ url('public/front/visitorinsure/images/insurance02.png') }}"><br>
                  <div class="title_h2 mt-3 mb-2">
                     <span class="blue_text">Visitors </span>
                     <span class="green_text">Insurance</span>
                  </div>
                  <p class="mb-4">Visitors Insurance travel insurance offers flexible, affordable emergency medical coverage to visitor.</p>
               </a>
            </div>
         </div>
         <div class="row premium_listing_slider text-center">
            <div class="col-lg-12 col-md-12 col-xl-12">
               <a href="{{ url('student-insurance') }}">
                  <img src="{{ url('public/front/visitorinsure/images/insurance03.png') }}"><br>
                  <div class="title_h2 mt-3 mb-2">
                     <span class="blue_text">Student </span>
                     <span class="green_text">Insurance</span>
                  </div>
                  <p class="mb-4">Student Insurance is for students who are studying abroad or international students coming to study in Canada.</p>
               </a>
            </div>
         </div>
         <div class="row premium_listing_slider text-center">
            <div class="col-lg-12 col-md-12 col-xl-12">
               <a href="{{ url('travel-insurance') }}">
                  <img src="{{ url('public/front/visitorinsure/images/insurance04.png') }}"><br>
                  <div class="title_h2 mt-3 mb-2">
                     <span class="blue_text">Travel </span>
                     <span class="green_text">Insurance</span>
                  </div>
                  <p class="mb-4">Travel Insurance protects you and your luggage against many perils you may come across while traveling abroad.</p>
               </a>
            </div>
         </div>
         <!-- <div class="row premium_listing_slider text-center">
            <div class="col-lg-12 col-md-12 col-xl-12">
               <a href="quote/tab_info.php?product_id=6">
                  <img src="{{ url('public/front/visitorinsure/images/insurance06.png') }}"><br>
                  <div class="title_h2 mt-3 mb-2">
                     <span class="blue_text">Multi Trip </span>
                     <span class="green_text">Insurance</span>
                  </div>
                  <p class="mb-4">Travel Insurance protects you and your luggage against many perils you may come across while traveling abroad.</p>
               </a>
            </div>
         </div> -->
         <!-- <div class="row premium_listing_slider text-center">
            <div class="col-lg-12 col-md-12 col-xl-12">
               <a href="quote/tab_info.php?product_id=9">
                  <img src="{{ url('public/front/visitorinsure/images/insurance05.png') }}"><br>
                  <div class="title_h2 mt-3 mb-2">
                     <span class="blue_text">Baggage </span>
                     <span class="green_text">Insurance</span>
                  </div>
                  <p class="mb-4">Travel Insurance protects you and your luggage against many perils you may come across while traveling abroad.</p>
               </a>
            </div>
         </div> -->
      </div>
   </div>
</section>

<section class="section insurance_plan d-lg-none">
   <div class="container">
      <div class="title_h1 text-center">
         
      </div>
      <h1 class="mb-5 mt-3 text-center"><span class="second_title">
         <span class="blue_text">Our Insurance </span>
         <span class="green_text">Plans</span>     
      </span></h1>
      <div class="row mt-5">


         <div class="col-6 col-md-6 col-xl-6">
            <div class="premium_listing_slider text-center">
                  <a href="{{ url('super-visa-insurance') }}">
                     <img src="{{ url('public/front/visitorinsure/images/insurance01.png') }}" class="img-fluid"><br>
                     <div class="title_h2 mt-3 mb-2">
                        <span class="blue_text">Super Visa </span>
                        <span class="green_text">Insurance</span>
                     </div>
                  </a>
            </div>
         </div>
         <div class="col-6 col-md-6 col-xl-6">
            <div class="premium_listing_slider text-center">
               <a href="{{ url('visitor-insurance') }}">
                  <img src="{{ url('public/front/visitorinsure/images/insurance02.png') }}"><br>
                  <div class="title_h2 mt-3 mb-2">
                     <span class="blue_text">Visitors </span>
                     <span class="green_text">Insurance</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="col-6 col-md-6 col-xl-6">
            <div class="premium_listing_slider text-center">
               <a href="{{ url('student-insurance') }}">
                  <img src="{{ url('public/front/visitorinsure/images/insurance03.png') }}"><br>
                  <div class="title_h2 mt-3 mb-2">
                     <span class="blue_text">Student </span>
                     <span class="green_text">Insurance</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="col-6 col-md-6 col-xl-6">
            <div class="premium_listing_slider text-center">
               <a href="{{ url('travel-insurance') }}">
                  <img src="{{ url('public/front/visitorinsure/images/insurance04.png') }}"><br>
                  <div class="title_h2 mt-3 mb-2">
                     <span class="blue_text">Travel </span>
                     <span class="green_text">Insurance</span>
                  </div>
               </a>
            </div>
         </div>
         <!-- <div class="col-6 col-md-6 col-xl-6">
            <div class="premium_listing_slider text-center">
               <a href="quote/tab_info.php?product_id=6">
                  <img src="{{ url('public/front/visitorinsure/images/insurance06.png') }}"><br>
                  <div class="title_h2 mt-3 mb-2">
                     <span class="blue_text">Multi Trip </span>
                     <span class="green_text">Insurance</span>
                  </div>
               </a>
            </div>
         </div>
         <div class="col-6 col-md-6 col-xl-6">
            <div class="premium_listing_slider text-center">
               <a href="quote/tab_info.php?product_id=9">
                  <img src="{{ url('public/front/visitorinsure/images/insurance05.png') }}"><br>
                  <div class="title_h2 mt-3 mb-2">
                     <span class="blue_text">Baggage </span>
                     <span class="green_text">Insurance</span>
                  </div>
               </a>
            </div>
         </div> -->
      </div>

   </div>
</section>


<section class="section how_it_works">
   <div class="container">
      <div class="title_h1 text-center">
         
      </div>
      <h1 class="mb-5 mt-3 text-center"><span class="second_title">
         <span class="blue_text">How the Policies </span>
         <span class="green_text">Work?</span>
      </span></h1>



      <div class="row">
         <div class="col-lg-5 col-md-12">
            <div class="block pt-5  text-center">
               <img id="custom_slide" src="{{ url('public/front/visitorinsure/images/slide01.png') }}" class="img-fluid" width="90%"><br>
            </div>
         </div>
         <div class="col-lg-7 col-md-12">

                  <div class="row how_works pt-5">
                     <div class="col-3 col-lg-2 mt-2">
                        <img src="{{ url('public/front/visitorinsure/images/check_green.png') }}" class="img-fluid float-right"><br>
                     </div>
                     <div class="col-9 col-lg-10">
                        <div class="title_h3">
                           <span class="blue_text">We find the </span>
                           <span class="green_text">perfect policy</span>
                        </div>
                        <p class="mb-4">We ask a few questions, crunch some numbers and compare the top insurers. We offer the lowest rates available specifically for you.</p>
                     </div>
                  </div>

                  <div class="row how_works">
                     <div class="col-3 col-lg-2 mt-2">
                        <img src="{{ url('public/front/visitorinsure/images/check_green.png') }}" class="img-fluid float-right"><br>
                     </div>
                     <div class="col-9 col-lg-10 col-md-10 col-xl-10">
                        <div class="title_h3">
                           <span class="blue_text">24/7 Friendly </span>
                           <span class="green_text">Support</span>
                        </div>
                        <p class="mb-4">Ongoing support and helpful articles to provide our readers all the latest info on insurance products/ requirements for travel and immigration.</p>
                     </div>
                  </div>

                  <div class="row how_works">
                     <div class="col-3 col-lg-2 mt-2">
                        <img src="{{ url('public/front/visitorinsure/images/check_green.png') }}" class="img-fluid float-right"><br>
                     </div>
                     <div class="col-9 col-lg-10 col-md-10 col-xl-10">
                        <div class="title_h3">
                           <span class="blue_text">Affordable </span>
                           <span class="green_text">Prices</span>
                        </div>
                        <p class="mb-4">Our Best Insurance products provide support to help individuals save millions of dollars every year, By spending just a few extra dollars on the cost.</p>
                     </div>
                  </div>
                  
               </div>

         </div>
      </div>

   </div>
</section>
<section class="section ">
   <div class="container">
      <div class="title_h1 text-center">
         
      </div>
      <h1 class="mb-5 mt-3 text-center"><span class="second_title">
         <span class="blue_text">Blog </span>
         <span class="green_text">Posts</span>
      </span></h1>


      @foreach(DB::table('blogs')->limit(1)->where('website' , 'visitorinsure')->orderby('id' , 'asc')->get() as $r)
      <div class="row">
         <div class="col-lg-6 col-md-12 pr-5">
            <div class="block pt-5  text-center">
               <img src="{{ url('public/images') }}/{{ $r->image }}" class="img-fluid blog_image"><br>
               <div class="blog_date">Date</div>
            </div>
         </div>
         <div class="col-lg-6 col-md-12">
            <div class="row how_works pt-5">
               <div class="col-lg-12 col-md-12 col-xl-12">
                  <div class="title_h1">
                     <span class="blue_text">{{ $r->title }}</span>
                  </div>
                  <p class="mb-4 text-justify">
                  @php
                     $blog_text = strip_tags($r->content);
                  @endphp
                  <span>{{ \Illuminate\Support\Str::limit($blog_text, 500, $end='') }}</span>
                  <span class="green_text">Continue Reading ... </span>
                  </p>
               </div>
               <div class="clearfix"></div>
               <a href="{{ url('blog') }}/{{ $r->url}}" class="blog_button">View Blog</a>
            </div>
         </div>
      </div>
      @endforeach
      @foreach(DB::table('blogs')->limit(1)->where('website' , 'visitorinsure')->orderby('id' , 'desc')->get() as $r)
      <div class="row mt-4 pt-4">

         <div class="col-lg-6 col-md-12 pr-5 d-lg-none">
            <div class="block pt-5  text-center">
               <img src="{{ url('public/images') }}/{{ $r->image }}" class="img-fluid blog_image"><br>
               <div class="blog_date">date</div>
            </div>
         </div>
         
         <div class="col-lg-6 col-md-12">
            <div class="row how_works pt-5">
               <div class="col-lg-12 col-md-12 col-xl-12">
                  <div class="title_h1">
                     <span class="blue_text">{{ $r->title }}</span>
                  </div>
                  <p class="mb-4 text-justify">
                  @php
                     $blog_text = strip_tags($r->content);
                  @endphp
                   <span>{{ \Illuminate\Support\Str::limit($blog_text, 500, $end='') }}</span>
                  <span class="green_text">Continue Reading ... </span>
                  </p>
               </div>
               <div class="clearfix"></div>
               <a href="{{ url('blog') }}/{{ $r->url}}" class="blog_button">View Blog</a>
            </div>
         </div>

         <div class="col-lg-6 col-md-12 pr-5 d-none d-lg-block">
            <div class="block pt-5  text-center">
               <img src="{{ url('public/images') }}/{{ $r->image }}" class="img-fluid blog_image"><br>
               <div class="blog_date">date</div>
            </div>
         </div>
         


      </div>
      @endforeach
   
      <div class="row mt-4 pt-4 pb-4">
         <div class="col-lg-12 col-md-12 text-center">
            <a href="{{ url('blogs') }}" class="blog_all_button">View All Blog Posts</a>
         </div>
      
      </div>
   </div>

   
</section>
<section class="section testimonials mt-5">
   <div class="container">
      <div class="title_h1 text-center">
         
      </div>
      <h1 class="mb-5 mt-3 text-center"><span class="second_title">
         <span class="white_text">Testimonials </span>
      </span></h1>
      <div class="row testimonials-plans mt-5">
         @foreach(DB::table('testimonials')->get() as $r)
         <div class="row testimonial_listing_slider text-center pt-4">
            <div class="col-lg-12 col-md-12 col-xl-12">
                  <img src="{{ url('public/front/visitorinsure/images/quotation_1.png') }}" class="img-fluid mr-3">
                  <img src="{{ url('public/images/')}}/{{ $r->image }}" class="img-fluid testimonials_avatar_pic">
                  <img src="{{ url('public/front/visitorinsure/images/quotation_2.png') }}" class="img-fluid ml-3"><br>
                  <div class="title_h2 mt-3 mb-2">
                     <span class="blue_text">{{ $r->name }}</span>
                  </div>
                  <p class="mb-4">{{ $r->testimonial }}</p>
            </div>
         </div>
         @endforeach
      </div>

   </div>
</section>
<section class="section faqs_section">
   <div class="container">
      <div class="title_h1 text-center">
         
      </div>
      <h1 class="mb-5 mt-3 text-center"><span class="second_title">
         <span class="blue_text">Frequently Asked </span>
         <span class="green_text">Questions (FAQs)</span>
      </span></h1>
      <div class="row">
         <div class="col-lg-12 col-md-12">
            <div class="container my-4">
              <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
               <p class="faq_category faqs_section_part2">Super Visa Insurance</p>
               @foreach(DB::table('frequesntlyaskquestions')->where('website' , 'visitorinsure')->where('category_id' , 4)->get() as $r)
               <div class="card mb-3  faqs_section_part2">
                 <div class="card-header" role="tab" id="supervisafaq">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#supervisafaq{{ $r->id }}" aria-expanded="false"
                     aria-controls="supervisafaq{{ $r->id }}">
                    <h5 class="mb-0 ">
                     <span class="faq_title">{{ $r->question }}</span>  <span class="arrow_faq"></span>
                    </h5>
                  </a>
                 </div>
                 <div id="supervisafaq{{ $r->id }}" class="collapse" role="tabpanel" aria-labelledby=""
                     data-parent="#accordionEx">
                  <div class="card-body">
                    <span class="faq_answer">{{ $r->answer }}</span>
                  </div>
                 </div>
               </div>
               @endforeach
              </div>
            </div>
         </div>
      </div>
   </div>
</section>


<section class="mb-5 pb-5">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12">
            <a href="{{ url('faq') }}" class="blog_button">View All</a>
         </div>
      </div>
   </div>
</section>
@endsection