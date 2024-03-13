<div id="page_{{$loop ?? '999'}}" class="I aura / Plot {{$cssPlot ?? '-h'}} / OnOff / {{$css ?? 'space-m bg-white'}} / round" localstorage-id>

    <div class="_head space-left_mbl / relative">
        @include('UTIN._brick.close')
        {!!$head!!}
        <div class="paragraphX2"></div>
    </div>
    <div class="_body _off / relative">
        {!!$slot!!}
    </div>

</div>