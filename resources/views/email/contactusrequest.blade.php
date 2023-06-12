<div style="background-color:#ebeced;margin:0;padding:0">
   <div style="font-family:arial;padding:20px">
      <table cellpadding="0" cellspacing="0" style="width:100%;max-width:580px;height:auto;background-color:#fff;border:0" align="center">
         <tbody>
            <tr>
               <td align="center" style="background-color:#ebeced;padding-top:10px;padding-bottom:30px">
                  <a href="" style="text-decoration:none" target="_blank"> <img src="https://visitorinsure.ca/images/logo-color.png" alt="logo" style="margin:0" class="CToWUd" data-bit="iit"></a>
               </td>
            </tr>
            <tr>
               <td style="background-color:#1d6aa3;height: 150px;">
                  <h1 style="padding:20px;color: white;">Contact Us Request</h1>
               </td>
            </tr>


            <tr>
               <td style="padding:30px 30px 15px">
                  
               </td>
            </tr>
            <tr>
               <td style="padding:0 30px">
                  <p style="font-size:14px;font-weight:normal;text-align:left;color:#1a1a1a"> Hi Admin,</p>
                   <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                     <div class="contact-details" style=" margin-bottom: 20px;">
                       <p style="margin: 5px 0;">Name: {{ $request->first_name }} {{ $request->last_name }}</p>
                       <p style="margin: 5px 0;">Email: {{ $request->email }}</p>
                       <p style="margin: 5px 0;">Phone: {{ $request->phone }}</p>
                     </div>
                     <div style="border: 1px solid #dddddd; padding: 10px; border-radius: 4px; background-color: #f5f5f5;">
                       <p style="margin: 5px 0;"><strong>Message:</strong></p>
                       <p style="margin: 5px 0;">{{ $request->message }}</p>
                     </div>
                     <p>Please respond to the contact request as soon as possible. Thank you!</p>
                   </div>
               </td>
            </tr>
         </tbody>
      </table>
   </div>
</div>