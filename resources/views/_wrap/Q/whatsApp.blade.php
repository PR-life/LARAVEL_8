<div class="Q {{$css ?? ''}}">
    <div class="_wrap / relative">
        <div class="content / Void">
            {!!$slot!!}
        </div>
    </div>
    {{-- <div class="Preamble -row -S">
        <div class="content-s / Grey">{!!$name ?? 'аноним'!!}</div>
        @isset($date)
        <div class="content-s / Grey">
            {!!$date!!}
        </div>
        @endisset
    </div> --}}
</div>