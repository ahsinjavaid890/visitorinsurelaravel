@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')
@section('content')
<section class="banner-products">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-12">
         </div>
         <div class="col-lg-6 col-md-12 headline_text">
            <div class="block">
               <div class="divider mb-3"></div>
               <h1 class="mb-4 mt-3 "><span class="main_title blue_text">Our Insurance Products</span></h1>
               <p class="mb-4 pr-5 heading_tagline">No matter where your next adventure takes you, make sure you’re covered for the unexpected. With Visitorguard.ca ,you’ll find the right insurance for the way you travel. Compare plans online and get an affordable health insurance quote in less than a minute.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="section products-page-container">
   <div class="container">

      <div class="row">
         <div class="col-lg-4 col-md-12">
            <div class="block pt-1 mt-1 pb-5 mb-5 text-left">
               <h1 class="mb-4 mt-3 text-left"><span class="second_title">
                  <span class="blue_text">Visitors & Travel</span>
                  <span class="green_text">Insurance</span>
               </span></h1>

               <p class="text-left mb-2 pb-2 products-text">
               While you’re away from your home country, Trave and Visitor insurance plans can help you and your loved ones stay safe. Visitors insurance is designed for visitors in Canada in mind with protection . Travel medical insurance ensures that international travelers, including Canadians citizens, get the medical attention when they need to visit out of province or out of country  without facing crushing medical debt.
               </p>
               <a href="quote/tab_info.php?product_id=2" class="btn btn-main btn-round-full">View Pricing Plans</a>
               <a href="quote/tab_info.php?product_id=2" class="btn btn-main btn-round-full btn_blue_invert">Learn More</a>
               <img src="{{ url('public/front/visitorinsure/images/product-cat1.jpg') }}" class="pt-5 img-fluid">

            </div>
         </div>
         <div class="col-lg-8 col-md-12 pl-5 pr-5">

                        
            <div class="row offset-top-2 wow-outer claim-form-boxes" style="margin-top: 0;">
               <div class="col-sm-12 col-lg-6 wow fadeInUp claimbox-container">
                  <div class="products-page-itembox text-center pb-4 pt-3 mb-4">
                    <div class="col-md-12 col-xs-12">
                      <img src="{{ url('public/front/visitorinsure/images/insurance01.png') }}">
                     <h1 class="mb-1 mt-2 text-center"><span class=" title_h2">
                        <span class="blue_text">Super Visa </span>
                        <span class="green_text">Insurance</span>    
                     </span></h1>
                     <p>
                        Super Visa Insurance is needed when you apply for a Super Visa for your family, parents or grand-parents.
                     </p>
                     <a href="supervisa-insurance.php" class="btn btn-main btn-round-full product-page-btns-green">Learn More</a>

                    </div>
                    
                  </div>
               </div>
               <div class="col-sm-12 col-lg-6 wow fadeInUp claimbox-container">
                  <div class="products-page-itembox text-center pb-4 pt-3 mb-4">
                    <div class="col-md-12 col-xs-12">
                      <img src="{{ url('public/front/visitorinsure/images/insurance02.png') }}">
                     <h1 class="mb-1 mt-2 text-center"><span class=" title_h2">
                        <span class="blue_text">Visitors </span>
                        <span class="green_text">Insurance</span>    
                     </span></h1>
                     <p>
                        Visitors Insurance travel insurance offers flexible, affordable emergency medical coverage to visitor.
                     </p>
                     <a href="visitor-insurance.php" class="btn btn-main btn-round-full product-page-btns-green">Learn More</a>

                    </div>
                    
                  </div>
               </div>
               <div class="col-sm-12 col-lg-6 wow fadeInUp claimbox-container">
                  <div class="products-page-itembox text-center pb-4 pt-3 mb-4">
                    <div class="col-md-12 col-xs-12">
                      <img src="{{ url('public/front/visitorinsure/images/insurance03.png') }}">
                     <h1 class="mb-1 mt-2 text-center"><span class=" title_h2">
                        <span class="blue_text">Student </span>
                        <span class="green_text">Insurance</span>    
                     </span></h1>
                     <p>
                        Student Insurance is for students who are studying abroad or international students coming to study in Canada. &nbsp&nbsp&nbsp&nbsp
                     </p>
                     <a href="student-insurance.php" class="btn btn-main btn-round-full product-page-btns-green">Learn More</a>

                    </div>
                    
                  </div>
               </div>
               <div class="col-sm-12 col-lg-6 wow fadeInUp claimbox-container  pb-5">
                  <div class="products-page-itembox text-center pb-4 pt-3 mb-4">
                    <div class="col-md-12 col-xs-12">
                      <img src="{{ url('public/front/visitorinsure/images/insurance04.png') }}">
                     <h1 class="mb-1 mt-2 text-center"><span class=" title_h2">
                        <span class="blue_text">Travel </span>
                        <span class="green_text">Insurance</span>    
                     </span></h1>
                     <p>
                        Travel Insurance protects you and your luggage against many perils you may come across while traveling abroad.
                     </p>
                     <a href="travel-insurance.php" class="btn btn-main btn-round-full product-page-btns-green">Learn More</a>

                    </div>
                    
                  </div>
               </div>
                  
            </div>

                  

         </div>
      </div>

   </div>
</section>




<section class=" products-page-container">
   <div class="container">

      <div class="row mb-5 mb-5">


         <div class="col-lg-4 col-md-12 d-lg-none">
            
            <div class="block pt-1 mt-1 pb-5 mb-5 text-left">
               <h1 class="mb-5 mt-3 text-left"><span class="second_title">
                  <span class="blue_text">Trip</span>
                  <span class="green_text">Insurance</span>
               </span></h1>

               <p class="text-left mb-2 pb-2 products-text">
               It’s a smart way to help you recover eligible expenses when scheduled trips are derailed by covered unexpected issues. Having Trip Cancellation and Trip Interruption could help protect more than just transportation expenses. You could get coverage on other eligible expenses, like hotels, meals and more, that go unused due to a covered cause.
               </p>
               <a href="quote/tab_info.php?product_id=5" class="btn btn-main btn-round-full">View Pricing Plans</a>
               <a href="quote/tab_info.php?product_id=5" class="btn btn-main btn-round-full btn_blue_invert">Learn More</a>
               <img src="{{ url('public/front/visitorinsure/images/product-cat2.jpg') }}" class="pt-5 img-fluid">

            </div>
         </div>


         <div class="col-lg-8 col-md-12 pl-5 pr-5">

                        
            <div class="row offset-top-2 wow-outer claim-form-boxes" style="margin-top: 0;">
               <div class="col-sm-12 col-lg-6 wow fadeInUp claimbox-container">
                  <div class="products-page-itembox text-center pb-4 pt-3 mb-4">
                    <div class="col-md-12 col-xs-12">
                      <img src="{{ url('public/front/visitorinsure/images/insurance05.png') }}">
                     <h1 class="mb-1 mt-2 text-center"><span class=" title_h2">
                        <span class="blue_text">Single Trip </span>
                        <span class="green_text">Insurance</span>    
                     </span></h1>
                     <p>
                        Super Visa Insurance is needed when you apply for a Super Visa for your family, parents or grand-parents.
                     </p>
                     <a href="quote/tab_info.php?product_id=5" class="btn btn-main btn-round-full product-page-btns-green">Learn More</a>

                    </div>
                    
                  </div>
               </div>
               <div class="col-sm-12 col-lg-6 wow fadeInUp claimbox-container">
                  <div class="products-page-itembox text-center pb-4 pt-3 mb-4">
                    <div class="col-md-12 col-xs-12">
                      <img src="{{ url('public/front/visitorinsure/images/insurance06.png') }}">
                     <h1 class="mb-1 mt-2 text-center"><span class=" title_h2">
                        <span class="blue_text">Multi Trip </span>
                        <span class="green_text">Insurance</span>    
                     </span></h1>
                     <p>
                        Visitors Insurance travel insurance offers flexible, affordable emergency medical coverage to visitor.
                     </p>
                     <a href="quote/tab_info.php?product_id=6" class="btn btn-main btn-round-full product-page-btns-green">Learn More</a>

                    </div>
                    
                  </div>
               </div>
               <div class="col-sm-12 col-lg-6 wow fadeInUp claimbox-container">
                  <div class="products-page-itembox text-center pb-4 pt-3 mb-4">
                    <div class="col-md-12 col-xs-12">
                      <img src="{{ url('public/front/visitorinsure/images/insurance07.png') }}">
                     <h1 class="mb-1 mt-2 text-center"><span class=" title_h2">
                        <span class="blue_text">All Inclusive </span>
                        <span class="green_text">Insurance</span>    
                     </span></h1>
                     <p>
                        Student Insurance is for students who are studying abroad or international students coming to study in Canada. &nbsp&nbsp&nbsp&nbsp
                     </p>
                     <a href="quote/tab_info.php?product_id=7" class="btn btn-main btn-round-full product-page-btns-green">Learn More</a>

                    </div>
                    
                  </div>
               </div>
               <div class="col-sm-12 col-lg-6 wow fadeInUp claimbox-container">
                  <div class="products-page-itembox text-center pb-4 pt-3 mb-4">
                    <div class="col-md-12 col-xs-12">
                      <img src="{{ url('public/front/visitorinsure/images/insurance08.png') }}">
                     <h1 class="mb-1 mt-2 text-center"><span class=" title_h2">
                        <span class="blue_text">Trip </span>
                        <span class="green_text">Cancellation</span>    
                     </span></h1>
                     <p>
                        Travel Insurance protects you and your luggage against many perils you may come across while traveling abroad.
                     </p>
                     <a href="quote/tab_info.php?product_id=8" class="btn btn-main btn-round-full product-page-btns-green">Learn More</a>

                    </div>
                    
                  </div>
               </div>
                  
            </div>
         </div>

         <div class="col-lg-4 col-md-12 d-none d-lg-block pb-5">
            <div class="block pt-1 mt-1 text-left">
               <h1 class="mb-5 mt-3 text-left"><span class="second_title">
                  <span class="blue_text">Trip</span>
                  <span class="green_text">Insurance</span>
               </span></h1>

               <p class="text-left mb-5 products-text">
               It’s a smart way to help you recover eligible expenses when scheduled trips are derailed by covered unexpected issues. Having Trip Cancellation and Trip Interruption could help protect more than just transportation expenses. You could get coverage on other eligible expenses, like hotels, meals and more, that go unused due to a covered cause.
               </p>
               <a href="quote/tab_info.php?product_id=5" class="btn btn-main btn-round-full">View Pricing Plans</a>
               <a href="quote/tab_info.php?product_id=5" class="btn btn-main btn-round-full btn_blue_invert">Learn More</a>
               <img src="{{ url('public/front/visitorinsure/images/product-cat2.jpg') }}" class="pt-5 img-fluid">

            </div>
         </div>
                  

      </div>

   </div>
</section>
@endsection