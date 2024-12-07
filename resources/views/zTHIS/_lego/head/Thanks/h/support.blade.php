@if(in_array($sms->name, ['Аноним', 'форма без имени', 'без имени']))
    @include('zTHIS._brick.h.index',['var'=>'Ваша анкета отправлена!'])
@else
    @include('zTHIS._brick.h.index',['var'=> $sms->name. ', мы получили <br>вашу анкету!'])
@endif