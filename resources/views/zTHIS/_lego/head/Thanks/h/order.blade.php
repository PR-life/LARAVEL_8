@if(in_array($sms->name, ['Аноним', 'форма без имени', 'без имени']))
    @include('zTHIS._brick.h.index',['var'=>'Заказ принят!'])
@else
    @include('zTHIS._brick.h.index',['var'=> $sms->name. ', ваш заказ успешно принят!'])
@endif