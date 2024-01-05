<div class="A {{$css ?? ''}}">
    <div class="_wrap -tail / relative">
        <div class="content / Void">
            {!!$slot!!}
        </div>
        <div class="Abs tail">@svg('tail')</div>
    </div>
    <div class="Preamble -row -S / right">
        <div class="content-s Grey">{!!$name ?? 'менеджер сайта'!!}</div>
    </div>
</div>