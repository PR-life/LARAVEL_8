<li class="{{$css ?? ''}} {{$open ?? ''}}">
{{-- <li class="{{isset($open) ? 'open' : ''}}"> --}}
    <span class="a lvl-{{$lvl ?? ''}} / flex cI" data-click data-css data-toggle='open' data-node='parent'>
        @isset($ico)
        {!!$ico!!}
        @endisset
        {!!$name!!}
    </span>
    {!!$slot!!}
</li>