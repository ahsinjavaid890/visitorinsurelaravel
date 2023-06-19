<div style="background:#045a9a;padding:20px;min-width:850px;border-radius: 10px;">
    <div class="adM">
    </div>
    <div style="margin:0 auto">
        <div class="adM">
        </div>
        <div style="background:#fff;padding:20px;border-bottom:3px #eeeeee solid;max-width: 600px;margin: auto;border-radius: 10px;">
            <div class="adM">
            </div>
            <div style="background:#045a9a;min-height:50px;border-radius: 10px;">
                <div class="adM">
                </div>
                <div style="float:left;padding:2%"><a href="{{ url('') }}" target="_blank"><img style="width:260px;background-color: white;padding: 12px;border-radius: 10px;" style="width:260px" src="https://lifeadvice.ca/public/images/118135255.png" alt="ArbetovInsurance.com" class="CToWUd" data-bit="iit">
                    </a>
                </div>
                <div style="float:right;padding:2%;text-align:right;color:#fff;font-size:18px;line-height:30px">
                    <span class="m_-5870175216950566861phones">+1-519-404-5041</span><br>
                    <span class="m_-5870175216950566861phones">+1-1855-500-5041</span>
                </div>
                <div style="clear:both"></div>
            </div>
            <div style="margin:30px 0;height:3px;background:#eeeeee"></div>
            <div style="clear:both"></div>
            <div>
                <div style="background:#eeeeee;padding:30px 20px;margin-bottom:20px;text-align:center">Your Policy Number   {{ $policy_number }}
                    for  Insurance has been received. Our agent will contact you shortly during business hours.
                </div>
                <div style="display: flex;">
                    @foreach(DB::table('traveler_sale_informations')->where('sale_id' , $sale->id)->get() as $key => $r)
                        <div style="margin-bottom:20px;width: 50%;">
                            <div style="background:#eeeeee;float:left;width: 98%;">
                                <div style="padding:20px;min-height:36px">
                                    <h4 style=" margin-bottom: 10px; margin-top: 0; font-size: 22px; ">Traveler Information {{ $key+1 }}</h4>
                                    First Name: {{ $r->f_name }} <br>Last Name: {{ $r->l_name }}<br>Gender: {{ $r->gender }}<br>Date of Birth: {{ Cmf::date_format($r->date_of_birth) }}<br>Pre-Existing Conditions?: {{ $r->pre_existing_condition }}<br>
                                </div>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                    @endforeach
                </div>
                <div style="clear:both"></div>
                <div style="background:#eeeeee;padding:30px 20px;margin-bottom:20px;text-align:left">
                    <div style="background:#eeeeee;float:left;width:48%">
                        Email: <a href="mailto:{{ $sale->email }}" target="_blank">{{ $sale->email }}</a><br>Telephone: {{ $sale->phonenumber }}<br>Address: {{ $sale->address }}<br>
                    </div>
                    <div style="background:#eeeeee;float:right;width:48%">
                        Policy Status: {{ $sale->status }}<br>Start Date: {{ $sale->start_date }}<br>End Date: {{ $sale->end_date }}<br>Number of Days: {{ $sale->duration }}<br>Coverage: ${{ $sale->coverage_ammount }}<br>Deductible: {{ $sale->deductibles }}
                        @if($sale->sponsersname)<br>Canadian Sponsor: {{ $sale->sponsersname }} @endif<br>Calculated Premium: <span style="font-size:2em">{{ $sale->premium }}</span><br><br>
                    </div>
                    <div style="clear:both"></div>
                </div>
                <div style="clear:both"></div>
                <div style="background:#eeeeee;padding:30px 20px;margin-bottom:20px;text-align:center">
                    <div style="width:33.333%;float:left;text-align:center">
                        <a href="" target="_blank">
                            <img alt="Extend effective date" src="https://ci4.googleusercontent.com/proxy/OZw8lhstIvSk_jgOPlQHeKnBf_2_FKhJEWhw-hRikXgoElQslc38_ADTpd7kR9oAHxRV28YcN84JOXxUnF9ILmdexK0o64jfxpm6uREHRTXCrYzTPfHdU2Ho8Eq2hQeD8chwq8qWhMdzzeyWzpeBU7vzsLhVNi_NlJjoKdSU5Q7rZM2SL1g5Eqtd3drzjA8FIn-g175TWwjhyTHWD9Z9=s0-d-e1-ft#https://arbetovinsurance.com/wp-content/plugins/insurance-calculator/templates/arbetovinsurance/images/email-images/extend-date-request.png" class="CToWUd" data-bit="iit">
                        </a><br>
                        <a style="color:#c0392b;line-height:2em" href="" target="_blank">Extend effective date</a>
                    </div>
                    <div style="width:33.333%;float:left;text-align:center">
                        <a href="" target="_blank">
                            <img alt="Move effective date" src="https://ci6.googleusercontent.com/proxy/h_fttMhdIQ-_HSeMcqiBgST-lN1ith0LOD7DBWPqaW8x7PL20rDhu4azvm5cbQjPEYojy12-xiozFlejdzJK_8QkPC6siGH9Fsp6Wi_IWVC_umXse2a6p-P8yWFMrEfFlUTeXnPORk6IIWdSYigqnhg5hpxtJIxpVb1LonKH0_tHQUPi_wLGRShiHeal_wYPcHXlZc9Xr3JiyRcuQA=s0-d-e1-ft#https://arbetovinsurance.com/wp-content/plugins/insurance-calculator/templates/arbetovinsurance/images/email-images/move-date-request.png" class="CToWUd" data-bit="iit">
                        </a>
                        <br>
                        <a style="color:#c0392b;line-height:2em" href="" target="_blank">Move effective date</a>
                    </div>
                    <div style="width:33.333%;float:right;text-align:center">
                        <a href="" target="_blank">
                            <img alt="Cancel my policy" src="https://ci6.googleusercontent.com/proxy/4GisIALqooQ4XkJPFEag_2GzQBpkCAl6HXaQQdL9UAZuQtmbO2HoMZP3pcUzpoetWkG2y4K7negwhmXzD-2xxgvkXK1mvklwueXXytBDd7bxjGuIHtmqYz42ul0TjgxcBuyPInfVXIKzZitSGFSJ_dRk5F-8G4bLxseMT9_U_o768vhiM-zUNXtGKEc95287cmbyHLfFWCpC9ExdSJaSOLlx2CGLFlY=s0-d-e1-ft#https://arbetovinsurance.com/wp-content/plugins/insurance-calculator/templates/arbetovinsurance/images/email-images/policy-cancellation-request.png" class="CToWUd" data-bit="iit">
                        </a><br>
                        <a style="color:#c0392b;line-height:2em" href="" target="_blank">Cancel my policy</a>
                    </div>
                    <div style="clear:both"></div>
                </div>
                <div style="clear:both"></div>
            </div>
            <div style="text-align:center;margin-top:30px">
                <a href="http://www.twitter.com/arbetovinsuranc" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://www.twitter.com/arbetovinsuranc&amp;source=gmail&amp;ust=1687250008229000&amp;usg=AOvVaw3mqcIW50JeUG2AxtUyaXOI"><img width="48" style="width:48px;max-width:48px;border:0;min-height:auto;outline:none;text-decoration:none" alt="We are on Twitter!" src="https://ci3.googleusercontent.com/proxy/vHTmoWLe8Ng1ovsdGlSCGPwsYTzZZ8skBAl5Z0v5puz_qDc-X4NhwTAXQP6mmR23vZWbJO3pA8hqSS2snBca0imzekpSNS6m0DWZRxFi9EBwvw08-PP0fM8FoBU5KFxeuInqPpuQ-w7EN4RHZJYtMkY_qljLV2RnNNiT_xCxkbVR7RfRVbV3eWiAyGd9p_OjaIg=s0-d-e1-ft#https://arbetovinsurance.com/wp-content/plugins/insurance-calculator/templates/arbetovinsurance/images/email-images/twetter.png" class="CToWUd" data-bit="iit"></a>
                &nbsp;<a href="http://www.facebook.com/arbetovinsurance/" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://www.facebook.com/arbetovinsurance/&amp;source=gmail&amp;ust=1687250008229000&amp;usg=AOvVaw2Izsz9pJmSelpRfqMIDa09"><img width="48" style="width:48px;max-width:48px;border:0;min-height:auto;outline:none;text-decoration:none" alt="We are on Facebook!" src="https://ci5.googleusercontent.com/proxy/Tyf2Oiqae1qrlh8e6xjUspTvvGi1ooLqdglFBgsNT75g1-VZ_MQinvs63iivutT5CwgWbofumEdICgtHZXAMClqlWepWM6jWR9-OXY-1-3s8b0K4smwPWHwWyJR2p3e8YCYf6N3q_9yXtyBDibJKNkB7mmlA1wUHaDDHqh-zXHkX6Avc5FpyBmIelbqArzG5caWEBA=s0-d-e1-ft#https://arbetovinsurance.com/wp-content/plugins/insurance-calculator/templates/arbetovinsurance/images/email-images/facebook.png" class="CToWUd" data-bit="iit"></a>
            </div>
        </div>
        <div style="margin-bottom:10px;"></div>
        <div style="padding:20px;background:#fff;padding:20px;border-bottom:3px #eeeeee solid;max-width: 600px;margin: auto;border-radius: 10px;">
            <div style="background:#eeeeee;text-align:center;padding:20px">
                <b>Visitor Insure</b><br>
                <br>912 Isaiah Place, Kitchener ON N2E 0B6, Canada<br>
                <br>
                <span class="m_-5870175216950566861phones">+1-519-404-5041</span><br>
                <span class="m_-5870175216950566861phones">+1-1855-500-5041</span><br>
                <a href="mailto:office@arbetovinsurance.com" style="color:#0077cc" target="_blank">info@visitorinsure.ca</a>
                <div class="yj6qo"></div>
                <div class="adL">
                </div>
            </div>
            <div class="adL">
            </div>
        </div>
    </div>
</div>
