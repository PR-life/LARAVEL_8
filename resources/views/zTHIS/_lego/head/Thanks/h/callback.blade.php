@if(in_array($sms->name, ['Аноним', 'форма без имени', 'без имени']))
    <div class="_h -vw / center-text b700">Заявка принята!</div>
@else
    <div class="_h -vw / b700">{{$sms->name}}, мы перезвоним в рабочие часы</div>
@endif