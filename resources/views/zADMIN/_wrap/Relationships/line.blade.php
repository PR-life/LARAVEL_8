<div id="Relationships_{{$id ?? 'noneName'}}" class="SOMA OnOff on / space-left / relative" data-click data-css data-toggle='on' data-localstorage localstorage-id>
    @include('_brick.Close.abs.Axon', ['cssClose' => 'Abs -lt -b x-27071330 / flex cI','cssCloseIcoClose' => '-XXS'])
    <div class="_close pointer">
        <div class="paragraph"></div>
        <div class="content / space-left / Grey">{{$name22071756 ?? 'имя блока'}}</div>
        <div class="paragraph"></div>
    </div>

    <div class="_open space" data-stopclick>
        <div class="W-100 / flex -wrap cloud">
            {!!$slot!!}
        </div>
    </div>
</div>



{{-- <div id="{{$id ?? 'wrapSummary'}}" class="_summary / SOMA OnOff / {{$css ?? '-border net'}}" data-click data-css data-toggle='on' data-localstorage localstorage-id>

    <div class="_Axon / x-name / flex bC pl-edgeS / relative pointer" style="padding-bottom: 5px">
        @include('_brick.Close.abs.Axon', ['css' => $varCssClose ?? null])
        <div class="_name {{$cssName ?? 'content-s'}}"><span class="noEvents slctn">{!!$name!!}</span></div>
    </div>

    <div class="{{$cssWrap ?? 'space-s'}} _open" data-stopclick>
        <div class="_content {{$cssContent ?? 'space round-s / void-s'}}">
            {!!$slot!!}
        </div>
    </div>

</div> --}}