<link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/mainform.css')}}">
<script type="text/javascript" src="{{ url('public/front/daterangepicker/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{url('public/front/daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/front/daterangepicker/daterangepicker.min.js') }}"></script>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
@php
$url = request()->segment(count(request()->segments()));
$firstsection = DB::table('travelpages')->where('url' , $url)->first();
@endphp
<div class="health-inssurance-hero-banners super-hero">
   <div class="container-homepage">
      <div class="row mb-3">
         <div class="col-md-6 hero-texts">
            <div class="herrotext super-hero-text">
               <h2 class="wow fadeInUp" data-wow-delay=".4s">{!! $firstsection->main_heading !!}</h2>
               <h5 class="wow fadeInUp  text-justify super-text" data-wow-delay=".6s"><span class="text-white">{{ $firstsection->sub_heading }}</span></h5>
               @if($firstsection->main_button_text)
               <div class="btns d-flex">
                  <div class="details">
                     <a href="{{ $firstsection->main_button_link }}" class=" btn-lg">{{ $firstsection->main_button_text }}</a>
                  </div>
               </div>
               @endif
            </div>
         </div>
         <div class="col-md-6 hero-images">
            <div class="hero-image super-images" style=" background-image: url('{{ url('') }}/public/images/{{ $firstsection->main_image  }}');
               background-position: 50% 70%;
               background-size: 100%;
               background-repeat: no-repeat;">
            </div>
         </div>
      </div>
  </div>
</div>
      @if($firstsection->form == 1)
      @php
         $prosupervisa = $data->pro_supervisa;
         if($prosupervisa == '1'){
         $supervisa = 'yes';
         } else {
         $supervisa = 'no';   
         }
      @endphp
      <div class="row card-section">
         <div class="col-md-12">
            
            <form id="quoteform" action="{{ url('ajaxquotes') }}" method="POST">
               @csrf
               <input type="hidden" name="product_id" value="{{ $data->pro_id }}">
               <input type="hidden" id="departure_date" name="departure_date">
               <input type="hidden" id="return_date" name="return_date">
               <!-- <input type="hidden" name="ages[]" id="selectage"> -->
               <!-- <input type="hidden" name="years[]" id="selectage"> -->
            <div class="qoute-card">
               <div class="card-body">
                  <div  data-v-67adc629="" class="quotes-generator-bar fixed">
                     <div  class="grid-container">
                        <div  class="grid-row grid-row--bar">
                           <div  class="d-grid generator-bar-row-wrap">
                              <label data-toggle="modal" data-target="#myModal1"  class="form-input input-destination has-arrow">
                                 <input  type="text" placeholder="Coverage Amount" required="required" id="coverageprice" class="input-field" disabled>
                                 <span  class="label-text">Coverage Amount</span>
                                 <div  class="dest-value"></div>
                              </label>
                              <label  data-toggle="modal" data-target="#myModal2"  class="form-input input-traveler-info has-arrow">
                              <input  id="ageshow" type="text" placeholder="Traveler Information" required="required" id="age" class="input-field" disabled>
                              <span  class="label-text">Traveler Information</span>
                              </label>
                              <div  data-toggle="modal" data-target="#myModal3"   class="form-input date-range form-input__date-range">
                                 <div  class="input-field">
                                    <div  class="from">
                                       <i  class="icon icon-calendar"></i>
                                       <div id="coveragedate"  class=" value"> Start Date 
                                       </div>
                                    </div>
                                    <div class="from ml-3">
                                       
                                       <div id="qoutedestination" class="value"></div>
                                    </div>
                                 </div>
                              </div>
                              <button style="color:white;" id="getqoutesubmitbutton" type="submit" class="button button-primary get-quotes-button"> Get Quotes </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class="modal zoom-in" aria-hidden="true" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
               <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                  <div class="modal-content rounded-3">
                     <div class="modal-body">
                        <div class="close-btn">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="card lg-wizard-card modal-card border-0">
                           <h2 class="heading-3 card-heading">Please Select Coverage Amount?</h2>
                           <div class="card-content coverage mb-3 pb-3">
                              <p class="card-info">Coverage amount, your insurance limit is the maximum amount your insurer may pay out for a claim, as stated in your policy.</p>
                          </div>
                              <div class="row mt-3">
                                @if(isset($fields['sum_insured']))
                                @if($fields['sum_insured'] == 'on')
                                 <div class="col-md-6 positionrelative">
                                    <label class="selectlabel">Coverage Ammount</label>
                                     <select name="sum_insured2" id="sum_insured2" class="sum_insured2 form-control">
                                       <option value="">Select Coverage Amount</option>
                                       @foreach($sum_insured as $r)
                                          <option value="{{ $r->sum_insured }}">${{ $r->sum_insured }}</option>
                                       @endforeach
                                     </select>
                                     <div class="text-danger mt-4" id="covergaeerror"></div>
                                </div>
                                 @endif
                                 @endif
                                 @if(isset($fields['Country']))
                                   @if($fields['Country'] == "on" )
                                    <div class="col-md-6 positionrelative">
                                       <label class="selectlabel">Primary Destination</label>
                                        <select name="primarydestination" id="primarydestination" class="primarydestination form-control">
                                          <option value="">Select Primary Destination</option>
                                          @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                             <option value="{{ $r->name }}">{{ $r->name }}</option>
                                          @endforeach
                                        </select>
                                        <div class="text-danger mt-4" id="primarydestinationerror"></div>
                                    </div>
                                    @endif
                                 @endif
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <div class="nextbtns">
                             <span id="firstnextfake" class="btn btn-default" onclick="firstnext()">Next</span>
                             <span style="display: none;" id="firstnextorignal"  class="btn btn-default btn-next">Next</span>
                          </div>
                        </div>
                  </div>
               </div>
            </div>
            <div class="modal zoom-in" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
               <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                  <div class="modal-content">
                     <div class="modal-body">
                        <div class="close-btn">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="card modal-card lg-wizard-card border-0">
                           <h2 class="heading-3 card-heading">How many travelers?</h2>
                           <!----><!----><!----><!---->
                           <div class="card-content d-flex">
                              <p  class="card-info"> Enter the age for each person that will be traveling.</p>
                              <div style="width:50%;display:none;padding: 4px;margin-bottom: 0px;" id="errortravelr" class="alert alert-danger">

                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12 mt-3">
                                 <div class="row mt-3 showrowstraveler">
                                    <div class="col-md-6">
                                       <div class="row alignitembaseline">
                                          <div class="col-md-6">
                                             <span class="travelerheading primarytravelheading">Primary Traveler</span>
                                          </div>
                                          <div class="col-md-6 nopad">
                                             <div class="input-wrapper positionrelative">
                                                <label class="selectlabeldateofbirth">Date Of Birth</label>
                                                <input id="dateofbirthfull" class="input dateofbirthclass1" type="text" placeholder="MM/DD/YYYY" name="years[]" data-placeholder="MM/DD/YYYY">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-3 positionrelative">
                                          <label class="selectlabel">Pre Existing Condition</label>
                                          <select name="pre_existing_condition[]" class="pre_existing_condition1 form-control">
                                             <option value="">Select Pre Existing Condition</option>
                                             <option value="Yes">Yes</option>
                                             <option value="Yes">No</option>
                                           </select>
                                    </div>
                                    <div class="col-md-3 alert1 text-danger" style="position:relative;">
                                       <span class="button button-help show-tooltip"></span>
                                       <div class="tooltip-container tooltip--auto-height activehelpful">
                                          <button class="button button-close-simplified close-tooltip"></button>
                                          <h4 class="heading heading-5">Helpful Info</h4>
                                          <div class="content">
                                             <p>A pre-existing condition is a health condition that existed prior to applying for health or life insurance. Conditions include illnesses such as diabetes, cancer, and heart disease</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="additionaltraveler">
                                    @for ($i=2; $i < 7; $i++)
                                    <div id="removebutton{{ $i }}" class="row mt-3 hiderowstraveler"> <div class="col-md-6"> <div class="row alignitembaseline"> <div class="col-md-6"> <span class="travelerheading primarytravelheading">Traveler {{ $i }}</span> </div> <div class="col-md-6 nopad"> <div class="input-wrapper positionrelative"> <label class="selectlabeldateofbirth">Date Of Birth Traveler {{ $i }}</label><input class="dateofbirthclass{{ $i }} input dateofbirthfull{{ $i }}" type="text" placeholder="MM/DD/YYYY" name="years[]" data-placeholder="MM/DD/YYYY"></div> </div> </div> </div> <div class="col-md-3 positionrelative"><label class="selectlabel">Pre Existing Condition</label> <select name="pre_existing_condition[]" class="pre_existing_condition{{ $i }} form-control"> <option value="">Select Pre Existing Condition</option> <option value="Yes">Yes</option> <option value="Yes">No</option> </select> </div> <div class="col-md-3"> <div class="crossbutton"> <span onclick="removeappendvalue({{ $i }})" class="button remove-line remove-icon md-hide sm-hide"></span> </div> </div> <div class="alert'+a+' text-danger"></div> </div>
                                    @endfor
                                 </div>
                              </div>
                              <div class="col-md-12 mt-3">
                                 <div class="travelerinfo">
                                    <span onclick="addtravellers()" class="button button-add-another button-trav-add"> Add Additional Traveler </span>
                                 </div>
                              </div>
                              <input type="hidden" value="5" id="numberoftraverls" name="">
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="nextbtns">
                          <span class="btn btn-default btn-prev">Prev</span>
                          <span id="secondnextfake"  class="btn btn-default" onclick="secondnext()">Next</span>
                          <span id="secondnextorignal" style="display: none;"   class="btn btn-default btn-next">Next</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal zoom-in" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
               <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
                  <div class="modal-content">
                     <div class="modal-body">
                        <div class="close-btn">
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="card modal-card lg-wizard-card border-0">
                           <h2 class="heading-3 card-heading">Start Date Of Coverage and Some Other Details</h2>
                              <div class="date_picker_wrapper" id="date_picker_1">
                           <div class="card-content d-flex">
                              <p class="card-info">Please Select Date When You Start Coverage</p>
                                <div class="date_picker_header">
                                  <h2 class="date_picker_month_day"></h2>
                                  <h2 class="date_picker_year ml-2"></h2>
                                </div>
                            </div>
                              <div class="row userdate-coverage">
                                 <div class="col-md-6 birthdateinput">
                                        <div class="date_picker_body">
                                          <div class="date_picker_month_navigation">
                                            <button class="date_picker_prev_month date_picker_month_nav_btn">
                                              <ion-icon name="caret-back-circle-outline"></ion-icon>
                                            </button>
                                            <h2 class="date_picker_month_name"></h2>
                                            <button class="date_picker_next_month date_picker_month_nav_btn">
                                              <ion-icon name="caret-forward-circle-outline"></ion-icon>
                                            </button>
                                          </div>
                                          <ul class="date_picker_month_days">
                                            <li>Sun</li>
                                            <li>Mon</li>
                                            <li>Tue</li>
                                            <li>Wed</li>
                                            <li>Thu</li>
                                            <li>Fri</li>
                                            <li>Sat</li>
                                          </ul>
                                        </div>
                                 </div>
                                 @if(isset($fields['email']))
                                 @if($fields['email'] == "on" )
                                   <div class="col-md-6 userdata-card mt-5">
                                      <div class="custom-form-control positionrelative">
                                          <label class="selectlabeldateofbirth">Enter Your Email</label>
                                            <input class="input" type="text"  name="savers_email" placeholder="Please Enter Your Email" required id="savers_email" class="input">
                                      </div>
                                       <div class="text-danger mt-4" id="savers_emailerror"></div>
                                   </div>
                                 @endif
                                 @endif
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="nextbtns">
                         <span class="btn btn-default btn-prev">Prev</span>
                         <span class="btn btn-default " id="donefake"  onclick="thirdone()">Done</span>
                         <span class="btn btn-default btn-next" style="display: none;" id="doneoriginal"  onclick="formdone()">Done</span>
                      <script type="text/javascript">
                        function formdone() {
                           $("#getqoutesubmitbutton").click();
                        }
                      </script>
                      </div>
                     </div>
                  </div>
               </div>
            </div>
            </form>
         </div>
      </div>
      @endif
   </div>
</div>
<script>
   var today = new Date();
   var dd = today.getDate();
   var mm = today.getMonth() + 1; //January is 0!
   var yyyy = today.getFullYear();
   if (dd < 10) {
      dd = '0' + dd;
   } 
   if (mm < 10) {
     mm = '0' + mm;
   } 
   var today = mm + '/' + dd + '/' + yyyy;
   function supervisayes(){
      var tt = document.getElementById('departure_date').value;
      var date = new Date(tt);
      var newdate = new Date(date);
      newdate.setDate(newdate.getDate() + 364);
      var dd = newdate.getDate();
      var mm = newdate.getMonth() + 1;
      var y = newdate.getFullYear();
      if(mm <= 9){
      var mm = '0'+mm;  
      }
      if(dd <= 9){
      var dd = '0'+dd;  
      }
      //var someFormattedDate = mm + '/' + dd + '/' + y;
      var someFormattedDate = y + '-' + mm + '-' + dd;
      document.getElementById('return_date').value = someFormattedDate;
   }
   function setdeparuredate(month, date, day, year) {
      var setmonth = +month + 1;
      $('#departure_date').val(year+'-'+setmonth+'-'+date)
      $('#coveragedate').html(year+'-'+setmonth+'-'+date)
      supervisayes();
   }
</script>
<script>
   var today = new Date();
   var dd = today.getDate();
   var mm = today.getMonth() + 1; //January is 0!
   var yyyy = today.getFullYear();
   if (dd < 10) {
      dd = '0' + dd;
   } 
   if (mm < 10) {
     mm = '0' + mm;
   } 
   var today = mm + '/' + dd + '/' + yyyy;
   $(function() {
     $('input[name="departure_dates"]').daterangepicker({
       opens: 'left',
      minDate: today,
      singleDatePicker: true,
       showDropdowns: true,
     }, function(start, end, label) {

     });
   });
   function supervisayess(){
      var tt = document.getElementById('departure_dates').value;
      var date = new Date(tt);
      var newdate = new Date(date);
      newdate.setDate(newdate.getDate() + 364);
      var dd = newdate.getDate();
      var mm = newdate.getMonth() + 1;
      var y = newdate.getFullYear();
      if(mm <= 9){
      var mm = '0'+mm;  
      }
      if(dd <= 9){
      var dd = '0'+dd;  
      }
      //var someFormattedDate = mm + '/' + dd + '/' + y;
      var someFormattedDate = y + '-' + mm + '-' + dd;
      document.getElementById('return_date').value = someFormattedDate;
   }
</script>
<script type="text/javascript">
   $("div[id^='myModal']").each(function(){
   
   var currentModal = $(this);
   
   //click next
   currentModal.find('.btn-next').click(function(){
   currentModal.modal('hide');
   currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show'); 
   });
   
   //click prev
   currentModal.find('.btn-prev').click(function(){
   currentModal.modal('hide');
   currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal('show'); 
   });
   
   });
   
</script>
<script type="text/javascript">
   $("div[id^='myModal']").each(function(){
   
   var currentModal = $(this);
   
   //click next
   currentModal.find('.btn-nexts').click(function(){
   currentModal.modal('hide');
   currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show'); 
   });
   
   //click prev
   currentModal.find('.btn-prevs').click(function(){
   currentModal.modal('hide');
   currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal('show'); 
   });
   
   });
   
</script>
<script type="text/javascript">
  //----------variables----------//

var day = "";
var month = "";
var year = "";
var currentDate = "";
var monthStartDay = "";

var monthTextArray = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

var dayTextArray = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

//----------functions----------//

function getMonthInfo(year, month) {

  //use current month to find number of days in month
  //i dont know why i have to add 1 to month
  var startDate = new Date(year, month + 1, 0);
  var monthLength = startDate.getDate();

  var startDate = new Date(year, month, 1);
  var monthStartDay = startDate.getDay();

  return [monthLength, monthStartDay];

}

function drawCal(monthInfo) {

  var daysInMonth = monthInfo[0];
  var monthStartDays = monthInfo[1];

  //clear cal tbody
  $("#cal").empty();
  $("#cal").append("<tr class=days><td>sun</td><td>mon</td><td>tue</td><td>wed</td><td>thur</td><td>fri</td><td>sat</td>");

  //create empty row, append to to tbody
  var $rowOut = $("<tr></tr>");
  $("#cal").append($rowOut);

  //shift first row by month start date
  for (var i = 1; i <= monthStartDays; i++) {
    var $day = "<td></td>";
    $("#cal tr:last").append($day);
  }

  //for each day, append a td to the row
  for (var i = 1; i <= daysInMonth; i++) {
    var $day = "<td><a>" + (i) + "</a></td>";
    $("#cal tr:last").append($day);

    //if day 7 (w/shift), append row contaning 7 days to tbody and clear row
    if ((i + monthStartDays) % 7 == 0 & i != 0) {
      $("#cal").append($rowOut);
      $rowOut = "<tr></tr>";
      $("#cal").append($rowOut);
    }
  }
}

//----------wiring----------//

$(".button_left").click(function() {

  month--;

  if (month < 0) {
    year--;
    month = 11;
  }

  //left button click
  $(".cal_head span").text(monthTextArray[month] + " " + year);
  drawCal(getMonthInfo(year, month));

});

//right button click
$(".button_right").click(function() {

  month++;

  if (month > 11) {
    year++;
    month = 0;
  }

  $(".cal_head span").text(monthTextArray[month] + " " + year);
  drawCal(getMonthInfo(year, month));

});

$("#cal").on("click", "td", function(e) {

  e.preventDefault();
  $("#cal td").removeClass("circle");
  $(this).addClass("circle");
  var outputDate = monthTextArray[month] + " " + $(this).children("a").html() + ", " + year;
  console.log(outputDate);
  $("#outputText").text(outputDate);
  $("#coveragedate").text(outputDate);

});

//----------run----------//

//get current month and year
currentDate = new Date();
year = currentDate.getFullYear();
month = currentDate.getMonth();
day = currentDate.getDate();

//get text month name from month number and write to span
$(".cal_head span").text(monthTextArray[month] + " " + year);

//inital calander draw based on current month
drawCal(getMonthInfo(year, month));

//var selector = ("td a:contains(" + day + ")");
var selector = $("td a").filter(function(){
 return $(this).text() === day.toString();
});

//var selector = $("#cal").find("a="+day+"");


$(selector.parent()).addClass("circle");

var outputDate = monthTextArray[month] + " " + day + ", " + year;


$("#outputText").text(outputDate);
</script>
<script type="text/javascript" src="{{ url('public/front/formqoute/datepiker.js')}}"></script>
<script type="text/javascript">
   function getquotesubmitform() {
      $('#quoteform').submit();
   }


   $('#quoteform').on('submit',(function(e) {
       $('#getqoutesubmitbutton').html('<i class="fa fa-spin fa-spinner"></i>');
       e.preventDefault();
       var formData = new FormData(this);
       $.ajax({
           type:'POST',
           url: $(this).attr('action'),
           data:formData,
           cache:false,
           contentType: false,
           processData: false,
           success: function(data){
            // console.log(data.html)
            $('#getqoutesubmitbutton').html('Get Quotes');
              $('.quotationscards').html(data.html);
           }
       });
   }));
</script>
<script>
  function maxLengthCheck(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
</script>
<script>
  function maxLengthChecks(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
</script>