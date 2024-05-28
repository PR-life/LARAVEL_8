
{{-- новое тут
_wrap.__.summary --}}



<div id="wrapSms_{{$id}}" class="SOMA / OnOff net" data-click data-css data-toggle='on' data-localstorage localstorage-id>

    <div class="x-name flex bC pl-edgeS / _Axon / pointer">
        <div class="content"><span class="noEvents slctn">{!!$name!!}</span></div>
        <div class="Axon noEvents">
            <div class="off / Ico -XS / orb-s contentBox">@svg('three')</div>
            <div class="on none / Ico -XS / orb-s contentBox">@svg('closeRoll')</div>
        </div>
    </div>

    <div class="_open bg-24051434" data-stopclick>
        <div class="{{$css ?? 'space round-s / void-s'}}">
            {!!$slot!!}
        </div>
    </div>
</div>