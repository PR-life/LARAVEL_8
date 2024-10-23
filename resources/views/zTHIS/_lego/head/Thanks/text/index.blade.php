@if($sms->email != null)
Ответ будет направлен на почту <span class="a">{{$sms->email}}</span>.                        
@elseif($sms->phone != null)
 Мы перезвоним по номеру <span class="a">{{$sms->phone}}</span> в рабочие часы.
@elseif($sms->whatsapp != null)
Ответ пришлем на whatsapp <span class="a">{{$sms->whatsapp}}</span>.
@elseif($sms->telegram != null)
Ответим в telegram @<span class="a">{{$sms->telegram}}</span>.
@elseif($sms->viber != null)
Ответ пришлем на viber <span class="a">{{$sms->viber}}</span>.
@endif