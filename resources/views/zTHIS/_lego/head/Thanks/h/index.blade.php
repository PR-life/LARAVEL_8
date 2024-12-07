@if($sms->name == 'Аноним' || $sms->name == 'форма без имени' || $sms->name == 'без имени' || $sms->name == 'не заполнили')
    @include('zTHIS._brick.h.index',['var'=>'Спасибо за обращение!'])
@else
    @include('zTHIS._brick.h.index',['var'=> $sms->name. ', спасибо за обращение!'])
@endif