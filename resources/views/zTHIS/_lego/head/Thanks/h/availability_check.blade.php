@if(in_array($sms->name, ['Аноним', 'форма без имени', 'без имени']))
    @include('zTHIS._brick.h.index',['var'=>'Заявка принята!'])
@else
    @include('zTHIS._brick.h.index',['var'=> $sms->name. ', ваша заявка принята!'])
@endif