<div style="background-color:#e5e5e5;margin:0;min-width:340px;padding:0">
   <div style="margin:0 auto 0 auto;max-width:600px">
      <table style="border-collapse:collapse;width:100%" cellpadding="0" border="0" align="center">
      <tbody>
         <tr>
            <td style="border-collapse: collapse; padding: 0; font-size:0px;line-height:0px">
               {{ $param_1 }}......................................................................................................................................................................................................................................................................................................................................................................................................................
            </td>
         </tr>
         {{-- <tr>
            <td style="@include('_.form.tmp._brick.cssTextTDMin')padding: 20px 0px;">
               <div style="@include('_.form.tmp._brick.cssTextWrap') padding: 0 25px; font-weight: 600;">
                     {{ $www }}
               </div>
            </td>
         </tr> --}}
      </tbody>
      </table>
   </div>

   <div style="margin:0 auto 0 auto;max-width:600px">
      <table style="border-collapse:collapse;width:100%" cellpadding="0" border="0" align="center">
      <tbody>
         <tr>
            <td style="@include('_.form.tmp._brick.cssTextTDMin') padding: 20px 0px;">
               <div style="@include('_.form.tmp._brick.cssTextWrapMin')padding: 0 25px;font-size: 36px;font-weight: 500;">
                  <div style="@include('_.form.tmp._brick.cssTextReset')">
                     {{ $title }}
                  </div>
               </div>
            </td>
         </tr>
      </tbody>
      </table>
   </div>

   @include('_.form.tmp._brick.line')


   <div style="margin:0 auto 0 auto;max-width:600px">
      <table style="border-collapse:collapse;width:100%" cellpadding="0" border="0" align="center">
      <tbody>
         <tr>
            <td style="@include('_.form.tmp._brick.cssTextTDMin') padding: 0px 0px 20px 0px;">
               <div style="@include('_.form.tmp._brick.cssTextWrap') padding: 0 25px; font-weight: 400;">
                  <div style="
                     direction: ltr;
                     display: inline-block;
                     font-size: 0px;
                     text-align: left;
                     vertical-align: top;
                     width: 100%;
                     ">
                     <table style="border-collapse:collapse;width:100%" cellpadding="0" border="0" align="center">
                     <tbody>
                        <tr>
                           <td style="@include('_.form.tmp._brick.cssTextTD') width: 120px;">
                              <div style="@include('_.form.tmp._brick.cssTextWrap') font-weight: 400;">
                                 <div style="@include('_.form.tmp._brick.cssTextReset')">
                                    Имя
                                 </div>
                              </div>
                           </td>
                           <td style="@include('_.form.tmp._brick.cssTextTD')">
                              <div style="@include('_.form.tmp._brick.cssTextWrap') font-weight: 600;">
                                 <div style="@include('_.form.tmp._brick.cssTextReset')">
                                    {{ $name }}
                                 </div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td style="@include('_.form.tmp._brick.cssTextTD') width: 120px;">
                              <div style="@include('_.form.tmp._brick.cssTextWrap') font-weight: 400;">
                                 <div style="@include('_.form.tmp._brick.cssTextReset')">
                                    Телефон
                                 </div>
                              </div>
                           </td>
                           <td style="@include('_.form.tmp._brick.cssTextTD')">
                              <div style="@include('_.form.tmp._brick.cssTextWrap') font-weight: 600;">
                                 <div style="@include('_.form.tmp._brick.cssTextReset')">
                                    {{ $phone }}
                                 </div>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                     </table>
                  </div>
               </div>
            </td>
         </tr>
      </tbody>
      </table>
   </div>

   <div style="margin:0 auto 0 auto;max-width:600px">
      <table style="border-collapse:collapse;width:100%" cellpadding="0" border="0" align="center">
      <tbody>
         <tr>
            <td style="
               border-collapse: collapse;
               padding: 20px 0px;
               text-align:left;
               ">
               <div style="
                  margin: 0;
                  padding: 0 25px;
                  color: #999999;
                  font-family: 'arial' , 'helvetica' , sans-serif;
                  font-size: 14px;
                  font-weight: 400;
                  line-height: 24px;
                  white-space:nowrap;
                  ">
                  <div style="margin:0;white-space:normal">
                     <p style="display:block;margin:0">Отправлено со стр.: {{ $page }}</p>
                     <p style="display:block;margin:0">Дата: {{ $date }}</p>
                  </div>
               </div>
            </td>
         </tr>
      </tbody>
      </table>
   </div>


</div>
