<link rel="stylesheet" type="text/css" href="{{ asset('public/front/tabs/formlayouttwo.css')}}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
    $('.selecttwo').select2();
});
</script>

<?php
if($data->pro_id == '1'){
$bgs = array(4, 6, 8, 11); //Super
} else if($data->pro_id == '2'){
$bgs = array(1, 2, 3, 7, 8, 11, 12, 15); //VTC
} else if($data->pro_id == '3'){
$bgs = array(5, 9, 10); //Student
} else if($data->pro_id == '9'){
$bgs = array(13, 14); //Student
} else {
$bgs = array(1, 2, 3, 7, 8, 11, 12); //VTC
}

$k = array_rand($bgs);
$bg = $bgs[$k];

?>
<section class="firstsection" style="background: linear-gradient( rgba(162, 44, 44, 0.3), rgba(82, 82, 82, 0.3) ), url('{{ asset('') }}public/front/bgs/<?php echo $bg;?>.jpg'); background-size: cover; background-position: 50% 50%; padding:50px 0px;">
   <div class="container">
      <div class="row birthdate">
         <div class="col-md-2 hidden-xs"></div>
         <div class="col-md-8 visa-insurance new-visa" style="background:rgba(0,0,0,0.7);">
            <div class="clearfix"></div>
            <div class="col-md-12 text-center" style="padding: 20px 0;">
               <h1 class="title-form" style="font-weight:bold;margin: 0px;color: #FFF;font-size: 38px;"><strong>{{ $data->pro_name }}</strong></h1>
               <h2 class="title_des mobile-deisply-none" style="margin: 0px;font-size: 16px;line-height: normal;color:#FFF;">To start, we have a few quick questions to understand your needs.</h2>
            </div>
            <form action="{{ url('quotes') }}" method="post" class=" form form-layout1" role="form" id="dh-get-quote">
            @csrf
                  <input type="hidden" name="product_id" value="{{ $data->pro_id }}">  

                  <div class="row">
                     @for($orderi=1;$orderi<=17;$orderi++)

                     @if(array_search("id_3",$orderdata) == $orderi)

                     @if(isset($fields['traveller']) && $fields['traveller'] == "on" )
                        @php
                           $number_of_travel = $fields['traveller_number'];
                        @endphp
                        @if($number_of_travel > 0)

                        <div class="col-md-12 ">
                           <label style="font-size: 16px;" for="number_travelers" class="text-white">Number of Travellers</label>
                           <div class="custom-form-control">
                              <select onchange="checknumtravellers(this.value)" required class="form-input" name="number_travelers" id="number_travelers" style="    padding: 5px 12px !important;">
                                 <option value="">Number of Travellers</option>
                                 @for($i=1;$i<=$number_of_travel;$i++)
                                 <option value="{{ $i }}">{{ $i }}</option>
                                 @endfor
                              </select>
                           </div>
                        </div>


                        @if(isset($fields['dob']) && $fields['dob'] == "on" )

                           @php
                              $ordinal_words = array('oldest', 'oldest', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth');
                              $c = 0;
                           @endphp

                           @for($i=1;$i<=$number_of_travel;$i++)
                           <div style="display: none;" id="traveler{{ $i }}" class="no_of_travelers col-md-12">
                              <div class="row">
                                 <div class="col-md-6">
                                    <label style="font-size: 16px;" for="year{{$i}}" class="text-white">Birth date of the <?php echo $ordinal_words[$i];?> Traveller</label>
                                       <div class="custom-form-control mb-2">
                                          <input id="dateofbirthfull{{ $i }}" class="form-control" type="text" inputmode="numeric" placeholder="MM/DD/YYYY" name="years[]" data-placeholder="MM/DD/YYYY">
                                       </div>
                                    </div>
                                    <div  class="col-md-6">
                                       <div class="custom-form-control">
                                          <label style="font-size: 16px;" for="year{{$i}}" class="text-white">Pre Existing of the <?php echo $ordinal_words[$i];?> Traveller</label>
                                          <select name="pre_existing[]" class="form-control" style="    padding: 5px 12px !important;">
                                             <option value="">Select Pre Existing Condition</option>
                                             <option value="yes">Yes</option>
                                             <option selected value="no">No</option>
                                           </select>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                           @endfor
                        @endif
                        @endif
                     @endif
                     @endif
                     @if(array_search("id_8",$orderdata) == $orderi)
                     @if(isset($fields['sdate']) && $fields['sdate'] == "on" && isset($fields['edate']) && $fields['edate'] == "on")
                           <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

                              <div class="col-md-6">
                                 <label class="input-label"> Start Date</label>
                                 <input style="padding-left: 40px;" id="departure_date" autocomplete="off" inputmode="numeric" name="departure_date" value=""  class="form-control"  type="text" placeholder="Start Date" required <?php if($data->pro_supervisa == 1){?> onchange="supervisayes()" <?php } ?>>
                                 <span class="hidden-xs emailicon" style="color:#1BBC9B;">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                 </span>
                                 <script>
                                    $('#departure_date').datepicker({
                                    format: 'yyyy-mm-dd',
                                    todayHighlight:'TRUE',
                                    autoclose: true,
                                    });
                                 </script>
                              </div>
                              <div class="col-md-6">
                                    <label class="input-label">End Date of Coverage</label>
                                    <div class="custom-form-control">
                                       <input style="padding-left: 40px;" id="return_date" autocomplete="off" name="return_date" value=""  class="form-control"  type="text" placeholder="End Date" required @if($data->pro_supervisa == 1) readonly @endif >
                                       <span class="hidden-xs emailicon" style="color:#1BBC9B;">
                                          <i class="fa fa-calendar" aria-hidden="true"></i>
                                       </span>
                                    </div>
                                 </div>
                                    
                                 @if($data->pro_supervisa != 1)
                                 <script>
                                    $('#return_date').datepicker({
                                    format: 'yyyy-mm-dd',
                                    todayHighlight:'TRUE',
                                    autoclose: true,
                                    });
                                 </script>  
                                 @endif
                           
                           
                     @endif
                     @endif
                     @if(array_search("id_6",$orderdata) == $orderi)
                     @if(isset($fields['Country']))
                        @if($fields['Country'] == "on" )
                           @if($data->pro_travel_destination == 'worldwide')
                            <script>
                              function CountryState(id) {
                                  if(id=="Canada")
                                  {
                                      $('#canadastate').fadeIn();
                                      $('#country').removeClass('col-md-12')
                                      $('#country').addClass('col-md-6')
                                  }else 
                                  {
                                      $('#canadastate').hide();
                                      $('#country').removeClass('col-md-6')
                                      $('#country').addClass('col-md-12')
                                      
                                 }
                              }
                           </script>
                           <div id="country" class="col-md-12 ">
                              <div class="custom-form-control">
                                 <label for="firstname" class="text-white" style="font-size: 16px;">States In Canada</label>
                                 <select required class="form-input" name="primary_destination" id="primary_destination" style="    padding: 5px 12px !important;">
                                    <option value="">Primary destination in Canada</option>
                                    @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                       <option value="{{ $r->name }}">{{ $r->name }}</option>
                                    @endforeach
                                 </select>
                                 
                              </div>
                           </div>
                           <div id="canadastate" class="col-md-6 " style="display:none;">
                              <div class="custom-form-control">
                                 <select required class="form-input" name="primary_destination" id="primary_destination" style="    padding: 5px 12px !important;">
                                    <option value="">Primary destination in Canada</option>
                                    @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                       <option @if($r->name == 'Ontario') selected @endif value="{{ $r->name }}">{{ $r->name }}</option>
                                    @endforeach
                                 </select>
                                 <label for="primary_destination" class="form-label" style="font-size: 16px;">States In Canda</label>
                              </div>
                           </div>
                           @else
                           <div class="col-md-12 " >
                              <label style="font-size: 16px;" for="primary_destination" class="text-white">Primary destination in Canada</label>
                              <div class="custom-form-control">
                                 <select required class="form-input" name="primary_destination" id="primary_destination" style="    padding: 5px 12px !important;">
                                    <option value="">Primary destination in Canada</option>
                                    @foreach(DB::table('primary_destination_in_canada')->get() as $r)
                                       <option @if($r->name == 'Ontario') selected @endif value="{{ $r->name }}">{{ $r->name }}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                           @endif
                        @endif
                     @endif
                     @endif
                     @if(array_search("id_1",$orderdata) == $orderi)
                     @if(isset($fields['fname']))
                     @if($fields['fname'] == 'on')

                     <div class="col-md-6 ">
                        <label for="firstname" class="text-white" style="font-size: 16px;">First name</label>
                        <div class="custom-form-control">
                           <input type="text" name="fname" placeholder="First Name" required id="firstname" class="form-control">
                        </div>
                     </div>
                     @endif
                     @endif
                      @if(isset($fields['lname']))
                     @if($fields['lname'] == 'on')
                     <div class="col-md-6 ">
                        <label for="lname" class="text-white" style="font-size: 16px;">Last name</label>
                        <div class="custom-form-control">
                           <input type="text" name="lname" placeholder="Last Name" required id="lname" class="form-control">
                        </div>
                     </div>
                     @endif
                     @endif
                     @endif
                     @if(array_search("id_17",$orderdata) == $orderi)
                     @if(isset($fields['sum_insured']))
               @if($fields['sum_insured'] == 'on')          
               

               @php
                  $sum = $sum_insured;
                  $min = min($sum);

                  $firstsuminsured = $min->sum_insured;
               @endphp
               


               <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
               <script>
                  @php
                  $sum = $sum_insured;
                  @endphp
                  var SliderValues = [0,<?php
                   $s = 0;
                   foreach($sum as $r){
                   $s++;   
                   echo $sumamount = $r->sum_insured;
                   if($s < count($sum)){
                   echo ', ';
                   }
                   } ?>];

                  var iValue = SliderValues.indexOf({{$firstsuminsured}});
                  $(function () {
                      $("#sum_slider").slider({
                          range: "min",
                          min: 0,
                          max: SliderValues.length - 1,
                          step: 1,
                          value: iValue,
                          slide: function (event, ui) {
                              $('#coverage_amount').text(SliderValues[ui.value]);
                                 //alert(SliderValues.length);
                                 for (i = 0; i < SliderValues.length; i++) {
                                 var group = SliderValues[i];
                                 $('.coverage-amt-'+group).hide();
                                 }
                                 $('.coverage-amt-'+SliderValues[ui.value]).show();
                                 $( "#coverage_amount" ).val( "$" + SliderValues[ui.value] );
                                 $( "#sum_insured2").val(SliderValues[ui.value]);
                          }
                      });

                  });
                    </script>

                 <div class="col-md-12">
                  <h4 class="coverage coverageheading">Coverage: <input type="text" id="coverage_amount" name="coverage_amount" style="border:0; font-size:23px; color:#1BBC9B; font-weight:bold;background: no-repeat;margin: 0;padding: 0;text-align: left;width: 150px;" value="${{$firstsuminsured}}"></h4>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom:20px;">
                     <div id="sum_slider" style="padding: 5px;border: none; background:#FFF;"></div>
                     <input type="hidden" id="sum_insured2" name="sum_insured2" value="{{ $firstsuminsured }}" />

                     <input name="sum_insured" value="" type="hidden" id="hidden_sum_insured">
                  
                  </div>
               @endif
               @endif
               @endif
                    @if(array_search("id_4",$orderdata) == $orderi)
                     @if(isset($fields['email']))
                        @if($fields['email'] == "on" )
                     <div class="col-md-12  col-sm-12 col-xs-12 control-input email-main">
                        <label style="font-size: 16px;" for="savers_email" class="text-white">Email</label>
                        <div class="custom-form-control">
                           <input id="savers_email" name="savers_email" value="" class="form-control form-control" type="email" placeholder="Email" style="padding-left: 40px !important;" required="">
                           <span class="hidden-xs emailicon" style="color:#1BBC9B;">
                              <i class="fa fa-envelope" aria-hidden="true"></i>
                           </span>
                        </div>
                     </div>
                     @endif
                     @endif
                     @endif
                     @if(array_search("id_7",$orderdata) == $orderi)
                     @if(isset($fields['phone']))
                     @if($fields['phone'] == 'on')
                     <div class="col-md-12 ">
                        <label for="phonenumbermask" class="text-white">Enter Your Phone Number</label>
                        <div class="custom-form-control">
                           <input style="padding-left: 40px !important;" type="text" name="phone" inputmode="numeric" data-placeholder="000-000-0000" placeholder="000-000-0000" required id="phonenumbermask" class="form-control">
                           <span class="phoneicon" style="color:#1BBC9B;">
                              <i class="fa fa-phone" aria-hidden="true"></i>
                           </span>
                        </div>
                     </div>
                     @endif
                     @endif
                     @endif
                     @if(array_search("id_14",$orderdata) == $orderi)
                      @if(isset($fields['gender']) && $fields['gender'] == "on" )
                     <div class="col-md-6 col-sm-6 col-xs-12 control-input">
                           <label class="input-label">Gender</label>
                           <button type="button" id="person_gender" class="form-control text-left" onclick="persongender();" style="padding: 0;font-size: 14px;font-weight: 500;"><i class="fa fa-male genderi"></i> Select Gender</button>
                           <script>
                              function persongender(){
                                 if(document.getElementById('gender').value == 'male'){
                                 document.getElementById('person_gender').innerHTML = '<i class="fa fa-female genderi"></i> Female';
                                 document.getElementById('gender').value = 'female';
                                 } else {
                                 document.getElementById('person_gender').innerHTML = '<i class="fa fa-male genderi"></i> Male';
                                 document.getElementById('gender').value = 'male';  
                                 }
                              }
                           </script>
                           <input type="hidden" name="gender" id="gender" value="">
                        </div>
                     @endif
                     @endif
                        @if(array_search("id_12",$orderdata) == $orderi)
                     @if(isset($fields['traveller_gender']) && $fields['traveller_gender'] == "on" )
                     <div class="col-md-6 col-sm-6 col-xs-12 control-input no-padding input custom_traveller gender-main">
                              <label class="input-label">Gender of the oldest traveller</label>
                              <button type="button" id="oldest_gender" class="form-control text-left" onclick="oldergender();" style="padding: 0;font-size: 14px;font-weight: 500;"><i class="fa fa-male genderi"></i>Gender of the oldest traveller</button>
                           <script>
                           function oldergender(){
                              if(document.getElementById('old_traveller_gender').value == 'male'){
                              document.getElementById('oldest_gender').innerHTML = '<i class="fa fa-female genderi"></i> Female';
                              document.getElementById('old_traveller_gender').value = 'female';
                              } else {
                              document.getElementById('oldest_gender').innerHTML = '<i class="fa fa-male genderi"></i> Male';
                              document.getElementById('old_traveller_gender').value = 'male';   
                              }
                           }
                           </script>
                        <input type="hidden" name="old_traveller_gender" id="old_traveller_gender" value="">       
                     </div>
                     @endif
                     @endif
                     @if(array_search("id_12",$orderdata) == $orderi)
                      @if(isset($fields['fplan']))
                           @if($fields['fplan'] == 'on')
            
                                 <div class="col-md-6">
                                 <label style="font-size: 16px;  for="" class="text-white">Do you require Family Plan ?</label>
                                 <div class="custom-form-control">
                                    <select required class="form-input" name="fplan" id=""      style="    padding: 5px 12px !important;">
                                       <option value="">--- Please Choose ---</option>
                                         <option value="yes" onclick="changefamilyyes()">Yes</option>
                                         <option selected value="no"  onclick="changefamilyno()">No</option>
                                    </select>
                                 </div>
                              </div>
                                 <input type="hidden" id="familyplan_temp" name="familyplan_temp" value="no">
                                 <script>
                                    function changefamilyyes(){
                                       document.getElementById('familyplan_temp').value = 'yes';   
                                       checkfamilyplan();
                                    }
                                    function changefamilyno(){
                                       document.getElementById('familyplan_temp').value = 'no'; 
                                       checkfamilyplan();
                                    }
                                 </script>
                              
                           @endif
                        @endif
                        @endif
                        @if(array_search("id_5",$orderdata) == $orderi)
                        @if(isset($fields['Smoke12']))
                           @if($fields['Smoke12'] == 'on')
                           <div class="col-md-6 col-sm-6 col-xs-12 control-input no-padding input custom_traveller gender-main">
                                 <label class="input-label">Do you Smoke in last 12 months?</label>
                                 <button type="button" id="doyousmoke" class="form-control text-left" 
                                 onclick="doyousmokeinlasttwelvedays();" style="padding: 0;font-size: 14px;font-weight: 500;"><img src="{{ url('public/front/no-smoking.png') }}"> No</button>
                              <script>
                              function doyousmokeinlasttwelvedays(){
                                 if(document.getElementById('Smoke12').value == 'no'){

                                    document.getElementById('doyousmoke').innerHTML = '<img src="{{ url('public/front/smoking.png') }}"> Yes';
                                    document.getElementById('Smoke12').value = 'yes';
                                 } else {
                                 document.getElementById('doyousmoke').innerHTML = '<img src="{{ url('public/front/no-smoking.png') }}"> No';
                                 document.getElementById('Smoke12').value = 'no';   
                                 }
                              }
                              </script>
                           <input type="hidden" name="Smoke12" id="Smoke12" value="no">       
                        </div>
                           @endif
                        @endif
                         @endif
                        @endfor 
                        <div class="col-md-12" style="clear: both;">
                     <span id="family_error" style="display: none; text-align: right;padding: 20px; color:yellow;"><i class="fa fa-warning"></i> </span>
                     <button type="submit" name="GET QUOTES" id="GET_QUOTES" class="btn btn-danger" style="border: 1px solid rgb(27, 188, 155);padding: 10px 30px;;margin-top: 20px;display: block;border-radius: 4px !important;"><i class="fa fa-list"></i> Get a Quote </button>
                  </div>
                  </div>
      
                     
                  
               
            </form>
         </div>
      </div>
   </div>
</section>



<script type="text/javascript">
   function checknumtravellers(id) {
      if(id == '')
      {
         $('.no_of_travelers').hide();
      }
      if(id == 1)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
      }
      if(id == 2)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
      }
      if(id == 3)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
         $('#traveler3').show();
      }
      if(id == 4)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
         $('#traveler3').show();
         $('#traveler4').show();
      }
      if(id == 5)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
         $('#traveler3').show();
         $('#traveler4').show();
         $('#traveler5').show();
      }
      if(id == 6)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
         $('#traveler3').show();
         $('#traveler4').show();
         $('#traveler5').show();
         $('#traveler6').show();
      }
      if(id == 7)
      {
         $('.no_of_travelers').hide();
         $('#traveler1').show();
         $('#traveler2').show();
         $('#traveler3').show();
         $('#traveler4').show();
         $('#traveler5').show();
         $('#traveler6').show();
         $('#traveler7').show();

      }
   }
</script>
<script>
   var container = document.getElementsByClassName("birthdate")[0];
   container.onkeyup = function(e) {
       var target = e.srcElement || e.target;
       var maxLength = parseInt(target.attributes["maxlength"].value, 10);
       var myLength = target.value.length;
       if (myLength >= maxLength) {
           var next = target;
           while (next = next.nextElementSibling) {
               if (next == null)
                   break;
               if (next.tagName.toLowerCase() === "input") {
                   next.focus();
                   break;
               }
           }
       }
       // Move to previous field if empty (user pressed backspace)
       else if (myLength === 0) {
           var previous = target;
           while (previous = previous.previousElementSibling) {
               if (previous == null)
                   break;
               if (previous.tagName.toLowerCase() === "input") {
                   previous.focus();
                   break;
               }
           }
       }
   }
  
   function supervisayes(){
   window.setTimeout(function(){    
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
    var someFormattedDate = mm + '/' + dd + '/' + y;
    document.getElementById('return_date').value = someFormattedDate;
   }, 1000);
   }
   
   
   function checkfamilyplan(){
   //Eligibility
   var inps = json_encode();
   var ages = [];
   for (var i = 0; i <inps.length; i++) {
   var inp=inps[i];
   if(inp.value > 0){
       ages.push(inp.value);
   }
   }
   
   Array.prototype.max = function() {
     return Math.max.apply(null, this);
   };
   
   Array.prototype.min = function() {
     return Math.min.apply(null, this);
   };
   
   var max_age = ages.max();
   var min_age = ages.min();
   
   if(document.getElementById('familyplan_temp').value == 'yes'){
   if(document.getElementById('number_travelers').value >='2' && max_age <=59 && min_age <=21){
   document.getElementById('GET_QUOTES').style.display = 'block';
   document.getElementById('family_error').innerHTML = '';
   document.getElementById('family_error').style.display = 'none';
   } else {
   document.getElementById('GET_QUOTES').style.display = 'none';
   if(document.getElementById('number_travelers').value <'2'){
   document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> Minimum 2 travellers required for family plan.';
   } else if(max_age > 59){
   document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> Maximum age for family plan should be 59';   
   } else if(min_age > 21){
   document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> For family plan the youngest traveller shouldn`t be elder than 21';  
   }
   document.getElementById('family_error').style.display = 'block';    
   }
   
   
   } else {
       document.getElementById('GET_QUOTES').style.display = 'block';
       document.getElementById('family_error').style.display = 'none'; 
   }
       
   }
   
   

</script>
<script>
      jQuery(document).ready(function($){
          $("select[name=number_travelers]").on("change", function(){
              var number_of_traveller = $(this).val();
              var aa = "";
              for(var i=2; i<=number_of_traveller; i++){
                  aa = aa +'<div class="col-md-6 col-sm-6 col-xs-12 control-input">' + $(".birthday")[0].outerHTML +'</div>';
              }
   
              $("#birthday_view").html(aa);
              console.log( $(".birthday")[0] );
          })
      });
</script>
<script>

   function checktravellers(){
       //Number OF Traveller
       var number_of_traveller = $("#number_travelers").val();
       for(var t=2; t<=8; t++){
           $("#traveller_"+t).hide();
           $("#add_" +t).prop("required", false);
       }
       for(var i=2; i<=number_of_traveller; i++){
           $("#traveller_"+i).show();
           $('#add_'+i).prop("required", true);
       }
       //reset values for other people
       var numt = $('#number_travelers').val() || 1;
       var one = 1;
       var num = parseInt(numt) + parseInt(one);
       for(var a=num; a<8; a++){
           $('#add_'+a).val('');
           $('#add_'+a).prop('required', false);
       }
   
       checkfamilyplan();
   }
   
   
   function checkfamilyplan(){
       //Eligibility
       var inps = document.getElementsByName('ages[]');
       var ages = [];
       for (var i = 0; i <inps.length; i++) {
           var inp=inps[i];
           if(inp.value > 0){
               ages.push(inp.value);
           }
       }
       
       Array.prototype.max = function() {
         return Math.max.apply(null, this);
       };
       
       Array.prototype.min = function() {
         return Math.min.apply(null, this);
       };
   
       var max_age = ages.max();
       var min_age = ages.min();
       if($('#familyplan_temp').val() == 'yes'){
           if($('#number_travelers').value >='2' && max_age <=59 && min_age <=21){
               $('#GET_QUOTES').css('display', 'block');
               $('#family_error').html('');
               $('#family_error').css('display', 'none');
           } 
           else {
               $('#GET_QUOTES').css('display', 'none');
               if($('#number_travelers').value <'2'){
                   $('#family_error').html('<i class="fa fa-warning"></i> Minimum 2 travellers required for family plan.');
               } 
               else if(max_age > 59){
                   $('#family_error').html('<i class="fa fa-warning"></i> Maximum age for family plan should be 59');  
               } 
               else if(min_age > 21){
                   $('#family_error').html('<i class="fa fa-warning"></i> For family plan the youngest traveller shouldn`t be elder than 21'); 
               }
               $('#family_error').css('display', 'block'); 
           }
       } 
       else {
           $('#GET_QUOTES').css('display', 'block');
           $('#family_error').css('display', 'none');  
       }
       
   }
   
   window.onload = function() {
     checktravellers();
   };
   
</script>
<script type="text/javascript" src="{{ url('public/front/js/jquery.mask.min.js') }}"></script>
<script type="text/javascript">
   $( document ).ready(function() {
       $('#dateofbirthfull1').mask('00/00/0000');
       $('#dateofbirthfull2').mask('00/00/0000');
       $('#dateofbirthfull3').mask('00/00/0000');
       $('#dateofbirthfull4').mask('00/00/0000');
       $('#dateofbirthfull5').mask('00/00/0000');
       $('#dateofbirthfull6').mask('00/00/0000');

       $('#phonenumbermask').mask('000-000-0000');
   });
</script>