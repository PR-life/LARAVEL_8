@if(in_array($sms->name, ['Аноним', 'форма без имени', 'без имени']))
    <div class="_h -vw / center-text b700">Ваш вопрос получен</div>
@else
    <div class="_h -vw / b700">{{$sms->name}}, мы получили ваш вопрос!</div>
@endif