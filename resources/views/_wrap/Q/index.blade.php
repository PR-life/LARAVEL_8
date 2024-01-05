<div class="Q {{$css ?? ''}} / {{$face ?? 'face face-padding face-top'}}" data-click data-css data-toggle='On'>
    <div class="_wrap / relative">
        <div class="content / Void / {{$cssLineClamp ?? 'lineClamp var-3 owl-lineClamp'}} / pointer">
            {!!$slot!!}
        </div>
    </div>
    <div class="Preamble -row -S">
        <div class="content-s / Grey">{!!$name ?? 'аноним'!!}</div>
        @isset($date)
        <div class="content-s / Grey">
            {!!$date!!}
        </div>
        @endisset
    </div>
</div>