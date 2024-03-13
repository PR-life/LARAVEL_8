<div class="Q {{$css ?? ''}} / {{$face ?? 'face face-padding face-top'}}" {!!$noJs ?? "data-click data-css data-toggle='On'"!!}>
    <div class="_wrap / relative">
        <div class="content / Void / {{$cssLineClamp ?? 'lineClamp var-3 owl-lineClamp / pointer'}}">
            {!!$slot!!}
        </div>
    </div>
    @if(!isset($preamble))
    <div class="Preamble -row -S">
        <div class="content-s / Grey">{!!$name ?? 'аноним'!!}</div>
        @isset($date)
        <div class="content-s / Grey">
            {!!$date!!}
        </div>
        @endisset
    </div>
    @endif
</div>