<div id="{{$id ?? 'wrapSummary'}}" class="_summary / SOMA OnOff / {{$css ?? 'net'}}" data-click data-css data-toggle='on' data-localstorage localstorage-id>

    <div class="_Axon / _name / flex bC pl-edgeS / relative pointer">
        @include('_brick.Close.abs.Axon', ['css' => $varCssClose ?? null])
        <div class="{{$cssName ?? 'content'}}"><span class="noEvents slctn">{!!$name!!}</span></div>
    </div>

    <div class="{{$cssWrap ?? 'space-s'}} _open" data-stopclick>
        <div class="paragraph-s"></div>
        <div class="_content {{$cssContent ?? 'space round-s / void-s'}}">
            {!!$slot!!}
        </div>
    </div>

</div>