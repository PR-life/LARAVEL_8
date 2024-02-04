<a class="content-s / flex cI bC" href="{{$link}}" target="_blank">
    <span class="flex cI Grey">
        <span class="Ico -S {{$cssIco ?? ''}} mr-2">@svg({{$nameSvg}})</span>
        {{-- {{$name}} --}}
    </span>
    <span>
        {!!$slot!!}
    </span>
</a>