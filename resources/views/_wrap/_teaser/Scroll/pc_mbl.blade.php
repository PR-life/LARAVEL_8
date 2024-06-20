<div class="Scroll_PC Scroll_mbl -scrollFIX / _Axon Axon / index">
    @isset($css12061513)
        @include('_brick.Close.index', ['css12061513' => $css12061513 ?? ''])
    @endisset
    <div class="_scr / _Axon / yesEvents {{$css04062023 ?? ''}}">
        {!!$slot!!}
    </div>
</div>