<div id="page_{{$loop ?? '999'}}" class="I aura / Plot -h / OnOff / / {{$css ?? 'space-m bg-white'}} / round" localstorage-id>
{{-- <div id="page_{{$loop ?? '999'}}" class="I aura Plot -mbl -auto / OnOff / Bone / {{$css ?? 'space-m bg-white'}} / round" localstorage-id> --}}

    <div class="_head">
        @include('zUTIN._wrap.A4.brick.close')
        {!!$head!!}
        <div class="paragraphX2"></div>
    </div>
    <div class="_body _off / relative">
        {!!$slot!!}
    </div>

</div>