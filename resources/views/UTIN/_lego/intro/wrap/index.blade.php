<a class="content-s / flex cI bC / Min -w6" href="{{$link}}" target="_blank">
    <span class="flex cI">
        <span class="Ico -S {{$cssIco ?? ''}} mr-2">@svg({{$nameSvg}})</span>
        {{$name}}
    </span>
    <span>
        {!!$slot!!}
    </span>
</a>