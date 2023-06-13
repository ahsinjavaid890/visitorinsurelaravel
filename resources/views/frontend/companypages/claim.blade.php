@extends('frontend.layouts.main')
@section('content')



<!-- Slider Start -->
<section class="banner-claims">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
            </div>
            <div class="col-lg-6 col-md-12 headline_text">
                <div class="block">
                    <div class="divider mb-3"></div>
                    <h1 class="mb-4 mt-3 "><span class="main_title blue_text">Insurance Claim Companies</span></h1>
                    
                </div>
            </div>
        </div>
    </div>
</section>










<section class="contact-form-wrap section">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 text-center mb-5">
                <h1 class="mb-5 mt-3 text-center"><span class="second_title">
                    <span class="blue_text">Claim Forms </span>
                    <span class="green_text">Downloads</span>       
                </span></h1>
                

                <p class="faq_answer">
                    Select company to download claim form and submit to the company.
                </p>
                













<div class="row offset-top-2 wow-outer claim-form-boxes" style="margin-top: 0;">
    @foreach(DB::table('wp_dh_insurance_plans')->wherenotNull('plan_name')->get() as $r)
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="{{ url('public/images') }}/{{ DB::table('wp_dh_companies')->where('comp_id' , $r->insurance_company)->first()->comp_logo }}">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h2">
                <span class="blue_text">{{ $r->plan_name }}  </span>
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/Visitors-to-Canada-Travelance-Claim-Form..pdf" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="https://lifeadvice.ca/wp-content/uploads/2019/03/Travelance-Visitors-to-Canada-–-Essential-Plan.pdf" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> 1-800-334-7787<br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> 1-905-667-0587</h4>
      </div>
   </div>
   </div>
   @endforeach
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="quote/admin/uploads/191020201022_TL.jpg">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h2">
                <span class="blue_text">Premier Plan</span>
                <span class="green_text"></span>        
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/Visitors-to-Canada-Travelance-Claim-Form..pdf" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="https://lifeadvice.ca/wp-content/uploads/2019/03/Travelance-Visitors-to-Canada-–-Premier-Plan.pdf" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> 1-800-334-7787<br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> 1-905-667-0587</h4>
      </div>
   </div>
   </div>
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="quote/admin/uploads/300620190120_GMS-Helath&amp;TravelInsurance.png">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h2">
                <span class="blue_text">Plan-b With Pre</span>
                <span class="green_text"></span>        
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/GMS-VTC-Emergency-Medical-Claim-Form-CA-Visitorguard.ca_.pdf" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="https://lifeadvice.ca/wp-content/uploads/2019/03/GMS-Immigrants-Visitors-Policy-Wording.pdf" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> 1-800-459-6604<br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> 1-905-762-5196</h4>
      </div>
   </div>
   </div>
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="quote/admin/uploads/26062019142204_21_century_log.png">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h2">
                <span class="blue_text">Enhanced Plan</span>
                <span class="green_text"></span>        
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/21st_century_visitors_claim_form-Visitorguard.ca_.pdf" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="quote/admin/uploads/07082019162607_" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> 1-877-882-2957<br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> 1-519-251-7856</h4>
      </div>
   </div>
   </div>
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="quote/admin/uploads/300620190126_tugoTravelInsuranceLogo.png">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h2">
                <span class="blue_text">Daily Plan - A</span>
                <span class="green_text"></span>        
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/TuGo_visitors_to_canada-Claim-Form-Visitorguard.ca_.pdf" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="https://lifeadvice.ca/wp-content/uploads/2019/03/TOGO-VTC-platinum.pdf" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> 1-800-663-0399<br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> 604-278-4108</h4>
      </div>
   </div>
   </div>
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="quote/admin/uploads/300620190129_ManulifeTravelInsuranceLogo.png">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h2">
                <span class="blue_text">Plan- A</span>
                <span class="green_text"></span>        
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/Manulife-Claim-Form-Visitorguard.ca_.pdf" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="quote/admin/uploads/29072019171209_" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> 1-877-882-2957<br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> 1-519-251-7856</h4>
      </div>
   </div>
   </div>
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="quote/admin/uploads/300620190129_ManulifeTravelInsuranceLogo.png">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h2">
                <span class="blue_text">Plan- B</span>
                <span class="green_text"></span>        
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/Manulife-Claim-Form-Visitorguard.ca_.pdf" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="quote/admin/uploads/29072019171242_" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> 1-877-882-2957<br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> 1-519-251-7856</h4>
      </div>
   </div>
   </div>
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="quote/admin/uploads/Blue-cross-Travel-Insurance-logo.png">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h2">
                <span class="blue_text">Plan-a</span>
                <span class="green_text"></span>        
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="quote/admin/uploads/" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> 1-877-882-2957<br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> 1-519-251-7856</h4>
      </div>
   </div>
   </div>
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="quote/admin/uploads/rsz_travel_shield_logo_png.png">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h2">
                <span class="blue_text">Plan-b</span>
                <span class="green_text"></span>        
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="quote/admin/uploads/25102019004757_" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> <br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> </h4>
      </div>
   </div>
   </div>
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="quote/admin/uploads/rsz_travel_shield_logo_png.png">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h2">
                <span class="blue_text">Plan-a</span>
                <span class="green_text"></span>        
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="quote/admin/uploads/18112020024537_" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> <br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> </h4>
      </div>
   </div>
   </div>
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="quote/admin/uploads/rsz_travel_shield_logo_png.png">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h3">
                <span class="blue_text"> Comprehensive-plan</span>
                <span class="green_text"></span>        
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="quote/admin/uploads/24102019233410_" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> <br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> </h4>
      </div>
   </div>
   </div>
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="quote/admin/uploads/destination_travel_logo.png">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h2">
                <span class="blue_text">Premier Plan</span>
                <span class="green_text"></span>        
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/destination-canada-claim-form-Visitorguard.ca_.pdf" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="https://lifeadvice.ca/wp-content/uploads/2019/03/Destination-Canada-VTC-PLAN.pdf" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> 1-866-261-1723<br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> 1-416-340-1553</h4>
      </div>
   </div>
   </div>
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="quote/admin/uploads/destination_travel_logo.png">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h2">
                <span class="blue_text">Base Plan</span>
                <span class="green_text"></span>        
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/destination-canada-claim-form-Visitorguard.ca_.pdf" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="quote/admin/uploads/04072019084254_Destinatation- Travel_Policy Wording_0719.pdf" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> 1-866-261-1723<br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> 1-416-340-1553</h4>
      </div>
   </div>
   </div>
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="quote/admin/uploads/INGLE-Assurance-Travel-insurance-Logo.png">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h2">
                <span class="blue_text">Plan-a</span>
                <span class="green_text"></span>        
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/HMC-Visitor-to-Canada-Claim-Form-Visitorguard.ca_.pdf" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="quote/admin/uploads/11102019205159_" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> 1-855-883-6479<br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> 1-416-467-4587</h4>
      </div>
   </div>
   </div>
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="quote/admin/uploads/INGLE-Assurance-Travel-insurance-Logo.png">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h2">
                <span class="blue_text">Plan- B</span>
                <span class="green_text"></span>        
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/HMC-Visitor-to-Canada-Claim-Form-Visitorguard.ca_.pdf" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="quote/admin/uploads/11102019204615_" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> 1-855-883-6479<br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> 1-416-467-4587</h4>
      </div>
   </div>
   </div>
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="quote/admin/uploads/allianz_logo-e1525269848236.png">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h2">
                <span class="blue_text">Plan- A</span>
                <span class="green_text"></span>        
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="quote/admin/uploads/18112020172848_Allianz Visitor insurance policy wording.pdf" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> <br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> </h4>
      </div>
   </div>
   </div>
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="quote/admin/uploads/300620190120_GMS-Helath&amp;TravelInsurance.png">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h2">
                <span class="blue_text">Plan-b With Pre</span>
                <span class="green_text"></span>        
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/GMS-VTC-Emergency-Medical-Claim-Form-CA-Visitorguard.ca_.pdf" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="https://lifeadvice.ca/wp-content/uploads/2019/03/GMS-Immigrants-Visitors-Policy-Wording.pdf" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> 1-800-459-6604<br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> 1-905-762-5196</h4>
      </div>
   </div>
   </div>
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="quote/admin/uploads/26062019142204_21_century_log.png">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h2">
                <span class="blue_text">Standard Plan</span>
                <span class="green_text"></span>        
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/21st_century_visitors_claim_form-Visitorguard.ca_.pdf" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="quote/admin/uploads/07082019162936_" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> 1-877-882-2957<br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> 1-519-251-7856</h4>
      </div>
   </div>
   </div>
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="quote/admin/uploads/26062019142204_21_century_log.png">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h2">
                <span class="blue_text">Basic Plan</span>
                <span class="green_text"></span>        
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/21st_century_visitors_claim_form-Visitorguard.ca_.pdf" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="quote/admin/uploads/07082019162221_" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> 1-877-882-2957<br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> 1-519-251-7856</h4>
      </div>
   </div>
   </div>
   <div class="col-sm-6 col-lg-3 wow fadeInUp claimbox-container">
   <div class="claimbox">
      <div class="col-md-12 col-xs-12">
         <img src="quote/admin/uploads/300620190120_GMS-Helath&amp;TravelInsurance.png">
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
            <h1 class="mb-5 mt-3 text-center"><span class="second_title title_h2">
                <span class="blue_text">Plan-b With Pre</span>
                <span class="green_text"></span>        
            </span></h1>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12">
         <a class="btn btn-block claim-btn" href="forms/GMS-VTC-Emergency-Medical-Claim-Form-CA-Visitorguard.ca_.pdf" target="_blank"><img class="img-claim" src="images/btn-claim.png"> Claim Form</a>
         <a class="btn btn-block policy-btn" href="https://lifeadvice.ca/wp-content/uploads/2019/03/GMS-Immigrants-Visitors-Policy-Wording.pdf" target="_blank"><img class="img-policy" src="images/btn-policy.png"> Policy Wording</a>
      </div>
      <div class="margin-top-25 clearfix"></div>
      <div class="col-md-12 col-xs-12 mt-3 pb-3">
         <h4 class="title_h3 blue_text"><img class="img-call" src="images/claim-call.png"> 1-800-459-6604<br clear="all"> <span class="faq_answer">(within Canada &amp; USA)</span></h4>
         <h4 class="title_h3 green_text"><img class="img-call" src="images/claim-collect.png"> 1-905-762-5196</h4>
      </div>
   </div>
   </div>
</div>






















            </div>
                
                

        </div>
    </div>
</section>














  <h3 class="wow-outer"><span class="wow slideInDown">Thank You!</span></h3>
  <p>We have received your contact inquiry we will get back to you as soon as possible.</p>

<section class="contact-form-wrap section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form id="contact-form" class="contact__form " method="post" action="?action=post">
                    

                    <div class="row">


                        <div class="col-lg-12 text-center mb-5">
                            <h1 class="mb-5 mt-3 text-center"><span class="second_title">
                                <span class="blue_text">Get Help with  </span>
                                <span class="green_text">Submitting a Claim</span>      
                            </span></h1>
                            
                            <p class="contact-info-text">
                                We know submitting a claim can be stressful and troublesome. That is why we offer assistance in filling the claim forms for you.
                            </p>
                            <p class="faq_answer">
                                Please contact your insurance provider, obtain a claim number and then fill in all the details to the best of your ability and we will then contact both you and our insurance partner(s) on your behalf to get the process started.
                            </p>
                            
                            <h1 class="mt-5 text-center"><span class="second_title title_h2">
                                <span class="blue_text">Contact Person  </span>
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
                         <div class="col-lg-6">
                            <div class="form-group">
                                <label>Policy #</label>
                                <input name="policy_no" id="policy_no" type="text" class="form-control" placeholder="Your Policy Number" required>
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <label>Claim #</label>
                                <input name="claim_no" id="claim_no" type="text" class="form-control" placeholder="Your Claim Number">
                            </div>
                        </div>
                    </div>

                    <div class="form-group-2 mb-4">
                        <label>Claim Details</label>
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message" required></textarea>
                    </div>

                    <div class="text-center">
                        <input class="btn btn-main btn-round-full" name="submit" type="submit" value="Send Messege"></input>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>


@endsection