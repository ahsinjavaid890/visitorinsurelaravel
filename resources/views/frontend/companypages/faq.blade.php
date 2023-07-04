@extends('frontend.layouts.main')
<link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/faq.css')}}">
@section('content')
<section style="background-color: #e1ebf3;height: 220px;">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 text-center mt-5">
            <h1 class="mb-4 mt-3"><span class="main_title blue_text">Frequesntly Asked Question</span></h1>
         </div>
      </div>
   </div>
</section>
   <section class="first-section-of-page">
      <div id="faq" class="container py-5">
         <div class="row faq">
            <div class="col-md-3 pb-4 mb-4 faqlinks">
               <div class="">
                  <div class="card">
                     <div class="card-body p-0">
                        <div class="card-list-heading p-3">
                            <h3 style="color: #2b3481;">Browse by topic</h3>
                            <hr>
                        </div>
                        <ul class="tabs">
                           @foreach(DB::table('frequesntlyaskquest_categories')->where('status' , 'Published')->orderby('order' , 'asc')->get() as $r)
                           <li class="tab-link @if($loop->first) current @endif" data-tab="tab-{{ $r->id }}">
                              <!-- <img src="{{ url('public/images') }}/{{ $r->icon }}" alt="{{ $r->name }}"> -->
                              <h3>{{ $r->name }}</h3>
                           </li>
                           @endforeach
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-9">
              <div class="row">
                  @foreach(DB::table('frequesntlyaskquest_categories')->where('status' , 'Published')->orderby('order' , 'asc')->get() as $r)
                  <div class="col-md-12" style="padding-left: inherit;">
                     <div id="tab-{{ $r->id }}" class="tab-content @if($loop->first) current @endif">
                        <div class="accordion" id="accordionExample{{ $r->id }}">




                           <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                           <p class="faq_category faqs_section_part2">{{ $r->name }}</p>
                           @foreach(DB::table('frequesntlyaskquestions')->where('website' , 'visitorinsure')->where('category_id' , $r->id)->orderby('order' , 'asc')->get() as $f)
                           <div class="card mb-3  faqs_section_part2">
                             <div class="card-header" role="tab" id="supervisafaq">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#supervisafaq{{ $f->id }}" aria-expanded="false"
                                 aria-controls="supervisafaq{{ $f->id }}">
                                <h5 class="mb-0 ">
                                 <span class="faq_title">{{ $f->question }}</span>  <span class="arrow_faq"></span>
                                </h5>
                              </a>
                             </div>
                             <div id="supervisafaq{{ $f->id }}" class="collapse" role="tabpanel" aria-labelledby=""
                                 data-parent="#accordionEx">
                              <div class="card-body">
                                <span class="faq_answer">{{ $f->answer }}</span>
                              </div>
                             </div>
                           </div>
                           @endforeach
                          </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
              </div>
            </div>
         </div>
      </div>
</section>
@endsection
@section('script')
<script type="text/javascript">
   $(document).ready(function(){
      $('ul.tabs li').click(function(){
         var tab_id = $(this).attr('data-tab');
         $('ul.tabs li').removeClass('current');
         $('.tab-content').removeClass('current');
         $(this).addClass('current');
         $("#"+tab_id).addClass('current');
      })
   
   })
</script>
@endsection