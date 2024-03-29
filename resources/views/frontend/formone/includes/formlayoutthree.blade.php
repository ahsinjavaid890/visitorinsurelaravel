<link rel="stylesheet" type="text/css" href="{{ url('public/front/tabs/formlayoutthree.css') }}">
<div class="clearfix"></div>
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
<section id="sectionbackground" style="background: linear-gradient( rgba(162, 44, 44, 0.3), rgba(82, 82, 82, 0.3) ), url('{{ asset('') }}public/front/bgs/<?php echo $bg;?>.jpg'); background-size: cover; background-position: 50% 50%; padding:50px 0px;">
   <div class="container" style="padding: 55px 0px 200px 0px;">

      <div class="col-md-12">
         <h1 class="mainheading">
            <strong>{{ $data->pro_name }}</strong>
         </h1>
         <h2 class="subheading" style="margin: 0 0 39px 0;">To start, we have a few quick questions to understand your needs.</h2>
      </div>
      <div class="col-md-12 text-center">
         <div class="clearfix"></div>
         <form action="{{ url('quotes') }}" method="post" class="form-horizontal form-layout2" role="form">
            @csrf
            <input type="hidden" name="product_id" value="{{ $data->pro_id }}">
            <div id="listprices_">
               <div class="page_1">
                  <div class="row">
                  @if(isset($fields['sum_insured']))
                     @if($fields['sum_insured'] == 'on')
                     <div class="col-md-4">
                        <div class="form-group">
                           <select required class="form-control" name="sum_insured2" id="coverageammount">
                              <option value="">Coverage Amount</option>
                              @foreach($sum_insured as $key=>$r)
                              <option value="{{ $r->sum_insured }}" @if($key==0) selected
                                 
                              @endif>${{ $r->sum_insured }}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     @endif
                     @endif
                      <!---Destination country -->
                      @if(isset($fields['Country']))
                      @if($fields['Country'] == "on" )
                         @if($data->pro_travel_destination == 'worldwide')
                         <script>
                            function CountryState(evt) {
                                if(evt.value=="Canada")
                                {
                                    jQuery("#primary_destination_State_div").show();
                                    jQuery("#usa_stop_div").hide();
                                }else if(evt.value=="United States")
                                {
                                    jQuery("#primary_destination_State_div").hide();
                                    jQuery("#usa_stop_div").hide();
                               }else
                               {
                                   jQuery("#primary_destination_State_div").hide();
                                    jQuery("#usa_stop_div").show();
                               }
                            }
                         </script>
                         <div class="col-md-4">
                            <select name="primary_destination" onchange="CountryState(this)" class="form-control form-select" id="primary_destination" aria-required="true" required>
                               @foreach(DB::table('countries')->get() as $r)
                               <option value='{{ $r->name }}'  data-imagecss="flag {{ $r->data_imagecss }}" data-title="{{ $r->name }}">{{ $r->name }}</option>
                               @endforeach
                            </select>
                         </div>
                         <div id="primary_destination_State_div">
                            <div class="col-md-4" style="text-align: left; float:left;">
                               <select name="primary_destination_State" class="form-control form-select" id="primary_destination_State" autocomplete="off" required>
                                  <option value=""> --- Primary destination in Canada ---</option>
                                  @foreach(DB::table('primary_destination_in_canada')->get() as  $key=>$r)
                                  <option value="{{ $r->name }}">{{ $r->name }}</option>
                                  @endforeach
                               </select>
                            </div>
                         </div>
                         <div id="usa_stop_div" style="display:none;">
                            <div class="col-md-4">
                               <select name="usa_stop" id="usa_stop" aria-invalid="false" class="form-control" required>
                               <?php  for($i=0;$i<=$allow_input_field['us_stop_days'];$i++): 
                                  if($allow_input_field['us_stop_days'] == 0 ):
                                   echo "<option selected='' value='0'>None</option>";
                                   else:
                                   echo  "<option value='$i'>$i days</option>";
                                   endif;  
                                  
                                  endfor; ?>
                               </select>
                            </div>
                         </div>
                         @else
                         <div class="col-md-4">
                            <select name="primary_destination" class="form-control" id="primary_destination" autocomplete="off" required style="margin-bottom:10px;">
                               <option value="" > --- Primary destination in Canada ---</option>
                               @foreach(DB::table('primary_destination_in_canada')->get() as 
                               $key => $r )
                                  <option value="{{ $r->name }}" @if($key == 0) selected
                                    
                                  @endif>{{ $r->name }}</option>
                               @endforeach
                            </select>
                         </div>
                         @endif
                      @endif
                   @endif
                   <!-- Destination ends -->
                  @if(isset($fields['email']))
                  @if($fields['email'] == "on" )
                  <div class="col-md-4" >
                     <div class="form-group" >
                  <input  id="savers_email" name="savers_email" class="form-control" required type="email" placeholder="Your email address" style="float: none;padding: 0 10px !important;">
                  </div>
                  </div>
                  @endif
               @endif
                  <div class="clear:both;"></div>
                
                  <script>
                     $('html').click(function() {
                         $('.ageandcitizen').fadeOut(300);
                      })
                     
                      $('.agesdiv').click(function(e){
                          e.stopPropagation();
                      });
                  </script>
                     </div>
                     <div class="col-md-2 pull-right" style="">
                        <button class="btn nextbtn" type="button" id="GET_QUOTES" onclick="$('.page_1').hide();$('.page_2').show('slow');" style="display: block;"> Next <i class="fa fa-arrow-circle-right"></i></button>
                     </div>
            </div>
               <!-- PAGE ONE ENDED -->
               <div class="page_2" style="display:none;">
                  <div class="row" style="margin-bottom: 12px">
                     @if(isset($fields['traveller']) && $fields['traveller'] == "on" )
                     @php
                        $number_of_travel = $fields['traveller_number'];
                     @endphp
                     @if($number_of_travel > 0)

                     <div class="col-md-4 ">
                        <div class="form-group">    
                           <select onchange="checknumtravellers(this.value)" required class="form-control" name="number_travelers" id="number_travelers" style="    padding: 5px 12px !important;">
                              <option value="">Number of Travellers</option>
                              @for($i=1;$i<=$number_of_travel;$i++)
                              <option value="{{ $i }}">{{ $i }}</option>
                              @endfor
                           </select>
                        </div>
                     </div>
                     @if(isset($fields['fname']))
                     @if($fields['fname'] == "on" )
                     <div class="col-md-4" style="margin-bottom:10px;">
                     <input id="fname" name="fname" class="form-control" required type="text" placeholder="Your first name">
                     </div>
                     @endif
                  @endif
                  @if(isset($fields['lname']))
                     @if($fields['lname'] == "on" )
                     <div class="col-md-4" style="margin-bottom:10px;">
                     <input  id="lname" name="lname" class="form-control" required type="text" placeholder="Your last name">
                     </div>
                     @endif
                  @endif
          
                     @if(isset($fields['smoked']))
                        @if($fields['smoked'] == "on" )
                           <div class="col-md-4" style="margin-bottom:10px;">
                              <select class="form-control" name="traveller_Smoke" id="traveller_Smoke" required="">
                                 <option value="">Traveller Smoke ?</option>
                                 <option value="yes">Yes</option>
                                 <option value="no">No</option>
                              </select>
                           </div>
                        @endif
                     @endif
                     @if(isset($fields['phone']))
                        @if($fields['phone'] == "on" )
                           <div class="col-md-4" style="margin-bottom:10px;">
                              <input inputmode="numeric" id="phone" name="phone" size="" minlength="10" maxlength="10" class="form-control" placeholder="Your phone number" type="text" required  onkeyup="validatephone()">
                           </div>
                           <script>
                              function validatephone(){
                              var checkphone = document.getElementById('phone').value;
                              document.getElementById('phone').value = checkphone.replace(/\D/g,'');
                              if (checkphone.length < 10) {
                              document.getElementById('phone_error').innerHTML = 'Must be 10 digits';
                              document.getElementById('GET_QUOTES').disabled = true;   
                              } else {
                              document.getElementById('GET_QUOTES').disabled = false;  
                              document.getElementById('phone_error').innerHTML = '';
                              }
                              }
                           </script>
                        @endif
                     @endif
                     @if(isset($fields['traveller_gender']))
                        @if($fields['traveller_gender'] == "on" )
                           <div class="col-md-4" style="margin-bottom:10px;">
                              <select class="form-control" name="old_traveller_gender" id="old_traveller_gender" required="">
                                 <option value="">Gender of Oldest Traveler</option>
                                 <option value="male">Male</option>
                                 <option value="female">Female</option>
                              </select>
                           </div>
                        @endif
                     @endif
                     @if(isset($fields['gender']))
                        @if($fields['gender'] == "on" )
                           <div class="col-md-4" style="margin-bottom:10px;">
                              <select class="form-control" name="gender" id="gender" required="" style="float:none;">
                                 <option value="">Gender</option>
                                 <option value="male">Male</option>
                                 <option value="female">Female</option>
                              </select>
                           </div>
                        @endif
                     @endif
                 
                     @if(isset($fields['dob']) && $fields['dob'] == "on" )
                        @php
                           $ordinal_words = array('oldest', 'oldest', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth');
                           $c = 0;
                        @endphp
                        @for($i=1;$i<=$number_of_travel;$i++)
                        <div style="display: none; " id="traveler{{ $i }}" class="no_of_travelers col-md-12 ">
                           <div class="row" >
                              <div class="col-md-6" id="dob" style="">
                              <div class="form-group ">
                                 <input id="dateofbirthfull{{$i}}" class="form-control" type="text" inputmode="numeric" placeholder="MM/DD/YYYY" name="years[]" data-placeholder="MM/DD/YYYY" >
                  
                              </div> 
                           </div>
                                 <div style="" id="specail" class="col-md-6 ">
                                    <div class="form-group">
                                       <select name="pre_existing[]" class="form-control" style=" padding: 5px 12px !important;">
                                          <option value="">Select Pre Existing Condition</option>
                                          <option value="yes">Yes</option>
                                          <option value="no">No</option>
                                        </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        @endfor
                  @endif
                  @endif
                  @endif
                  </div>     
                  <div class="row">
                     <div class="col-md-12" style="margin: 20px 0;">
                        <div class="row">
                           <div class="col-md-5 col-xs-12" style="padding: 0;width: 50%;">
                              <button class="btn btn-default" style="padding: 5px 40px; font-weight: bold; font-size: 16px; display: block;border-radius: 50px;  color:#333 !important;background: #FFF !important;box-shadow: none !important; margin-bottom:10px;" id="backbtn" type="button" onclick="$('.page_1').show();$('.page_2').hide('slow');"><i class="fa fa-arrow-circle-left"></i> Back</button>
                           </div>
                           <div class="col-md-7 col-xs-12" style="padding: 0;width: 50%;">
                              <button type="submit" id="getquote" style="font-size:16px;" class="btn nextbtn float-right"> Continue <i style=" position: absolute; top: 13px; right: 20px; " class="fa fa-arrow-circle-right"></i></button>
                           </div>
                        </div> 
                     </div>
                  </div>
                  
               </div>
               <span id="family_error" class="col-md-12" style="display: none; font-size: 16px;font-weight: bold;text-align: left;padding: 20px; color:yellow;"><i class="fa fa-warning"></i> </span><br>
               <input type="hidden" name="broker" value="">     
               <input type="hidden" name="agent" value="">
               <input type="hidden" name="skip_coverage" value="yes">
            </div>
         </form>
      </div>
   </div>
</section>
<script type="text/javascript">
window.onkeyup = keyup;
var inputTextValue;
function keyup(e) {
  inputTextValue = e.target.value;
  $('#searchValue').text(inputTextValue);
  if (e.keyCode == 13) {
    window.location = inputTextValue;
  }
}


</script>

<script>
function checkfamilyplan(){
//Eligibility
var inps = null;

Array.prototype.max = function() {
  return Math.max.apply(null, this);
};

Array.prototype.min = function() {
  return Math.min.apply(null, this);
};

var max_age = inps.max(); //ages.max();
var min_age = inps.min();
//alert(max_age);
if(document.getElementById('familyplan_temp').value == 'yes'){
var number_travelers = '';
if(number_travelers >=2 && max_age <=59 && min_age <=21){
$('#GET_QUOTES').show();
document.getElementById('family_error').innerHTML = '';
document.getElementById('family_error').style.display = 'none';
} else {
$('#GET_QUOTES').hide();
if(number_travelers < 2){
document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> Minimum 2 travellers required for family plan.';
} else if(max_age > 59){
document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> Maximum age for family plan should be 59'; 
} else if(min_age < 21){
document.getElementById('family_error').innerHTML = '<i class="fa fa-warning"></i> For family plan the youngest traveller shouldn`t be elder than 21';   
}
document.getElementById('family_error').style.display = 'block';  
}

} else {
   $('#GET_QUOTES').show();
   document.getElementById('family_error').style.display = 'none';   
}
   
}

function numoftravelers(){
if(document.getElementById('familyplan_temp').value == 'yes'){
checkfamilyplan();
}

$("#number_travelers").on("change", function(){
var number_of_traveller = $(this).val();
var aa = "";
for(var i=2; i<=number_of_traveller; i++){
var aa = aa + $("#birthday")[0].outerHTML;
}

$("#birthday_view").html(aa);
//console.log( $(".birthday")[0] );
})

}


</script>
<script type="text/javascript">
   function supervisayes(){
//window.setTimeout(function(){  
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
   //alert(someFormattedDate);
//}, 1000);

checknumtravellers();
}

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
        if($('#number_travelers').value >=2 && max_age <=59 && min_age <=21){
            $('#GET_QUOTES').css('display', 'block');
            $('#family_error').html('');
            $('#family_error').css('display', 'none');
        } 
        else {
            $('#GET_QUOTES').css('display', 'none');
            if($('#number_travelers').value < 2){
                $('#family_error').html('<i class="fa fa-warning"></i> Minimum 2 travellers required for family plan.');
            } 
            else if(max_age > 59){
                $('#family_error').html('<i class="fa fa-warning"></i> Maximum age for family plan should be 59');   
            } 
            else if(min_age < 21){
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
<script>
(function ( $ ) {
	$.fn.bootstrapNumber = function( options ) {

		var settings = $.extend({
			upClass: 'default',
			downClass: 'default',
			upText: '+',
			downText: '-',
			center: true
			}, options );

		return this.each(function(e) {
			var self = $(this);
			var clone = self.clone(true, true);

			var min = self.attr('min');
			var max = self.attr('max');
			var step = parseInt(self.attr('step')) || 1;

			function setText(n) {
				if (isNaN(n) || (min && n < min) || (max && n > max)) {
					return false;
				}

				clone.focus().val(n);
				clone.trigger('change');
				return true;
			}

			var group = $("<div class='input-group'></div>");
			var down = $("<button type='button'>" + settings.downText + "</button>").attr('class', 'btn btn-' + settings.downClass).click(function() {
				setText(parseInt(clone.val() || clone.attr('value')) - step);
			});
			var up = $("<button type='button'>" + settings.upText + "</button>").attr('class', 'btn btn-' + settings.upClass).click(function() {
				setText(parseInt(clone.val() || clone.attr('value')) + step);
			});
			$("<span class='input-group-btn'></span>").append(down).appendTo(group);
			clone.appendTo(group);
			if(clone && settings.center) {
				clone.css('text-align', 'center');
			}
			$("<span class='input-group-btn'></span>").append(up).appendTo(group);

			// remove spins from original
			clone.prop('type', 'text').keydown(function(e) {
				if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
					(e.keyCode == 65 && e.ctrlKey === true) ||
					(e.keyCode >= 35 && e.keyCode <= 39)) {
					return;
				}
				if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
					e.preventDefault();
				}

				var c = String.fromCharCode(e.which);
				var n = parseInt(clone.val() + c);

				if ((min && n < min) || (max && n > max)) {
					e.preventDefault();
				}
			});

			self.replaceWith(group);
		});
	};
} ( jQuery ));

$('.after').bootstrapNumber();
$('#colorful').bootstrapNumber({
	upClass: 'success',
	downClass: 'danger'
});
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
   });
</script>