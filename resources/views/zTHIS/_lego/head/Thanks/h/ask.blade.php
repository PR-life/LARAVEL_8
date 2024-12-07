@if(in_array($sms->name, ['Аноним', 'форма без имени', 'без имени']))
    @include('zTHIS._brick.h.index',['var'=>'Ваш вопрос получен!'])
@else
    @include('zTHIS._brick.h.index',['var'=> $sms->name. ', мы получили ваш вопрос!'])
@endif