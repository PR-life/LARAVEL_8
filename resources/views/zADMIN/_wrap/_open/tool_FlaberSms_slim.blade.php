<div id="wrapSms_{{$id}}" class="OnOff net" data-click data-css data-toggle='on' data-localstorage localstorage-id>

    <div class="flex bC pl-edgeS x-09081744 / pointer">
        <div class="content"><span class="noEvents slctn">{!!$name!!}</span></div>
        <div class="pointer">
            <div class="_Off / Ico -XXS / noEvents / orb-s contentBox"><svg><use xlink:href="#svg-three"></use></svg></div>
            <div class="_Open / Ico -XXS / noEvents / orb-s contentBox"><svg><use xlink:href="#svg-close"></use></svg></div>
        </div>
    </div>

    <div class="_open space-s" style="padding-top: 0" data-stopclick>
        <div class="{{$css ?? 'space round-s x-24051434 / void-s'}}">
            {!!$slot!!}
        </div>
    </div>
</div>