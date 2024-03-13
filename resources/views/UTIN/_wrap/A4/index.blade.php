<div id="page_{{$loop ?? '999'}}" class="I aura / Bone / OnOff / Plot {{$cssPlot ?? '-hMin'}} / Utin {{$css ?? 'space-m bg-white'}} / round index relative" localstorage-id>
    <div class="_head space-left_mbl / relative">
        @include('UTIN._brick.close')
        <div class="h b500">{!!$header!!}</div>
        <div class="paragraphX2"></div>
        <div class="paragraphX2 / _Off"></div>
        {!!$Font ?? ''!!}
    </div>
    <div class="_body _off {{$cssBody ?? ''}} / relative">
        {!!$slot!!}
    </div>
</div>