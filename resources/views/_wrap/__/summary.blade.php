<div id="{{$id ?? 'wrapSummary'}}" class="_summary / SOMA OnOff / {{$css ?? '-border net'}}" data-click data-css data-toggle='on' data-localstorage localstorage-id>

    <div class="_Axon / x-name / flex bC pl-edgeS / relative pointer" style="padding-bottom: 5px">
        @include('_brick.Close.abs.Axon')
        <div class="_name {{$cssName ?? 'content-s'}}"><span class="noEvents slctn">{!!$name!!}</span></div>
    </div>

    <div class="{{$cssWrap ?? 'space-s'}} _open" data-stopclick>
        {{-- <div class="paragraph-s"></div> --}}
        <div class="_content {{$cssContent ?? 'space round-s / void-s'}}">
            {!!$slot!!}
        </div>
    </div>

</div>