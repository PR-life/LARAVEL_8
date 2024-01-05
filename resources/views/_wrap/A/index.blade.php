<div class="A {{$css ?? ''}}" data-click data-css data-toggle='On'>
    <div class="_wrap -tail / relative">
        <div class="content / Void / {{$cssLineClamp ?? 'lineClamp var-2 owl-lineClamp'}} / pointer">
            {!!$slot!!}
        </div>
        <div class="Abs tail">@svg('tail')</div>
    </div>
    <div class="Preamble -row -S / right">
        <div class="content-s Grey">{!!$name ?? 'менеджер сайта'!!}</div>
    </div>
</div>