@if(in_array($sms->name, ['Аноним', 'форма без имени', 'без имени']))
    <div class="_h -vw / center-text b700">Заказ принят!</div>
@else
    <div class="_h -vw / b700">{{$sms->name}}, ваш заказ успешно принят!</div>
@endif