<div class="{{$css ?? ''}}">
    <div class="content">{{$name ?? '...'}}</div>
    <div class="paragraph"></div>
    <div class="flex -wrap cross-xs">
       {!!$slot!!}
    </div>
 </div>