@if($sms->name == 'Аноним' || $sms->name == 'форма без имени' || $sms->name == 'без имени' || $sms->name == 'не заполнили')
<div class="_h -vw / center-text b700">Спасибо за обращение!</div>
@else
<div class="_h -vw / b700">{{$sms->name}}, спасибо за обращение!</div>
@endif