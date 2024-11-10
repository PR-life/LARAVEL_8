@component('zTHIS.PAGE.Thanks._wrap.head')
    @slot('h')
        @include('zTHIS._lego.head.Thanks.h.order',['sms'=>$sms])
    @endslot

    <div class="center-text edge-s">
        @include('zTHIS._lego.head.Thanks.text.order')
    </div>               
    <div class="paragraphX2"></div>
    @isset($sms->sms)
    <div class="content Grey / space-m">
        {!!$sms->sms!!}
    </div>   
    @endisset
    <div class="center-text">
        <div class="inline">
            <a class="Btn cC / round-s" href="{{$sms->from_page}}">назад</a>
        </div>
    </div>
@endcomponent