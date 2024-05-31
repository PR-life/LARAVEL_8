<div id="page_{{$loop ?? '999'}}" class="
    I aura / Bone / OnOff
    Plot {{$cssPlot ?? '-hMin -S'}} /
    Utin {{$css ?? '-border bg-white vol-def / space-m'}} /
    round index relative" localstorage-id corrector-jsscroll="100">


    <div class="_bg / Abs -all _indexMin / round hidden">
        <div class="_1"></div>
        <div class="_2"></div>
        <div class="_3"></div>
    </div>

    <div class="_head {{$cssHead ?? ''}} / relative">
        @include('_brick.Close.zUTIN.close')
        {!!$head!!}
        <div class="paragraphX2"></div>
    </div>
    <div class="_body _off H-100 {{$cssBody ?? ''}} / relative">
        {!!$slot!!}
    </div>

</div>