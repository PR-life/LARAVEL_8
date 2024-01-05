<div class="Chunk cI pr-2 {{$css ?? ''}}">
    <div class="_ico / flex eC / Pr -x4">
        @isset($linkAdd)
        <a class="Ico {{$icoCss ?? '-S'}} / space-xs contentBox / x-btn-plus" href="{{$linkAdd}}">{!!$slot ?? ''!!}</a>
        @else
        <div class="Ico {{$icoCss ?? '-S'}}">{!!$slot ?? ''!!}</div>
        @endisset   
    </div>
    <div class="_item chunk-100_Ico round-s {!! (isset($routeName) &&  request()->routeIs($routeName)) ? 'active' : '' !!}">
        @isset($routeName)
        <a class="{{$sizeName ?? 'content-s'}} / nowrap Ellipsis / W-100 block" href="{{route($routeName)}}"><span class="x-edge slctn">{{$name}}</span></a>     
        @else
        <span class="{{$sizeName ?? 'content-s'}} / nowrap Ellipsis / pointer"><span class="x-edge slctn">{{$name}}</span></span>  
        @endisset           
    </div>
</div>

