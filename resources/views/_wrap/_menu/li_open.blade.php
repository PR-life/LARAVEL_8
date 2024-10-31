<li class="{{$css ?? ''}} {{$open ?? ''}}">
{{-- <li class="{{isset($open) ? 'open' : ''}}"> --}}
    @component('_wrap._menu._wrap.li_open.name_ico',['lvl' => $lvl ?? ''])
        @isset($ico)
        <span class="_ico / flex cI cC">
            {!!$ico!!}
        </span>
        @endisset
        <span>{!!$name!!}</span>
    @endcomponent
    {!!$slot!!}
</li>