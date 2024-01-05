@isset($routeRegexp)
<a class="Chunk cI pr-2 {{$css ?? ''}} {!! request()->is($routeRegexp) ? 'active' : '' !!}" href="{{route($routeName)}}">
@else
<a class="Chunk cI pr-2 {{$css ?? ''}} {!! request()->routeIs($routeName) ? 'active' : '' !!}" href="{{route($routeName)}}">
@endisset
    <div class="_ico / flex eC / Pr -x4">
        <div class="Ico {{$icoCss ?? '-S'}}">{!!$slot ?? ''!!}</div>
    </div>
    <div class="_item chunk-100_Ico round-s">
        <span class="{{$sizeName ?? 'content-s'}} / slctn pointer">{{$name}}</span>         
    </div>
</a>