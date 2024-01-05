<div class="Chunk cI pr-2 pointer {{$css ?? ''}} {!! request()->is($routeRegexp) ? 'active' : '' !!}" {!!$data!!}>
    <div class="_ico / flex eC / Pr -x4">
        <div class="Ico {{$icoCss ?? '-S'}}">{!!$slot ?? ''!!}</div>
    </div>
    <div class="_item chunk-100_Ico round-s">
        <span class="{{$sizeName ?? 'content-s'}} / slctn pointer">{{$name}}</span>         
    </div>
</div>



