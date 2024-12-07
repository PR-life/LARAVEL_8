@if(in_array($sms->name, ['Аноним', 'форма без имени', 'без имени','не заполнили']))
    @include('zTHIS._brick.h.index',['var'=>'Заявка принята!'])
@else
    @include('zTHIS._brick.h.index',['var'=> $sms->name. ', мы перезвоним <br>в рабочие часы'])
@endif