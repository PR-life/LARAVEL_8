<div id="page_{{$loop ?? '999'}}" class="I aura / Plot {{$cssPlot ?? '-hMin'}} Bone / OnOff / / {{$css ?? 'space-m bg-white'}} / round" localstorage-id>
{{-- <div id="page_{{$loop ?? '999'}}" class="I aura Plot -mbl -auto / OnOff / Bone / {{$css ?? 'space-m bg-white'}} / round" localstorage-id> --}}

     

    <div class="_head {{$cssHead ?? ''}}">
        @include('UTIN._wrap.A4.brick.close')
        {!!$head!!}
        <div class="paragraphX2"></div>
    </div>
    <div class="_body _off H-100 {{$cssBody ?? ''}} / relative">
        {!!$slot!!}
    </div>

</div>