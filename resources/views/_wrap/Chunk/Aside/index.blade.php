<div class="Chunk cI pr-2 {{$css ?? ''}}">
    <div class="_ico / flex eC / Pr -x4">
        @isset($linkAdd)
        <a class="flex cI cC / Ico {{$icoCss ?? '-S'}} / btn-plus round-50" href="{{$linkAdd}}">{!!$slot ?? ''!!}</a>
        {{-- <a class="flex cI cC / Ico btn-plus round-50 {{$icoCss ?? '-S'}} / space-xs contentBox" href="{{$linkAdd}}">{!!$slot ?? ''!!}</a> --}}
        @else
        <div class="Ico {{$cssIco ?? 'space-02081055'}}">{!!$slot ?? ''!!}</div>
        @endisset   
    </div>
    <div class="_item flex bC cI / chunk-100_Ico round-s {!! (isset($routeName) &&  request()->routeIs($routeName)) ? 'active' : '' !!}">
        @isset($routeName)
        <a class="{{$sizeName ?? 'content-s'}} / nowrap Ellipsis / W-100 block" href="{{route($routeName)}}"><span class="x-edge slctn">{{$name}}</span></a>     
        @else
        <span class="{{$sizeName ?? 'content-s'}} / nowrap Ellipsis / pointer"><span class="x-edge slctn">{{$name}}</span></span>  
        @endisset     
        <div class="pr-2">
            <div class="ico-close Ico -XXS / none">@svg('close')</div>
        </div>
    </div>
</div>

