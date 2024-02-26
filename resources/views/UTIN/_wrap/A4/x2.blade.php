<div id="page_{{$loop ?? '999'}}" class="I aura / Bone / OnOff / Plot {{$cssPlot ?? '-h -S'}} / Utin {{$css ?? 'space-m bg-white'}} / round index relative" localstorage-id>
    <div class="_head space-left_mbl / relative">
        @include('UTIN._brick.close')
        <div class="h b500">{!!$header!!}</div>
        <div class="paragraphX2"></div>
        <div class="paragraphX2 / _Off"></div>
        {!!$Font ?? ''!!}
    </div>
    <div class="_body _off H-100 {{$cssBody ?? ''}} x-25021811 / relative">
        {!!$slot!!}
        <div class="_off H-100 / Grid x2 -gap / bg-cell">        
            <div class="_cell _1 / flex dC bC_PC / space void / relative index">
                {!!$cell_1 ?? ''!!}
                <div class="paragraph net none_PC"></div>
            </div>
            <div class="_cell _2 / flex dC bC_PC / space void / relative index">
                {!!$cell_2 ?? ''!!}
                <div class="paragraph net none_PC"></div>
            </div>
            {{-- <div class="_cell _3 / flex dC bC_PC / space void / relative index">
                {!!$cell_3 ?? ''!!}
                <div class="paragraph net none_PC"></div>
            </div> --}}
        </div>
    </div>
</div>