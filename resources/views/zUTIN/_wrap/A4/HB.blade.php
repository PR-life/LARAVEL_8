<div id="page_{{$loop ?? '999'}}" class="I aura / Plot -h flex dC / OnOff / / {{$css ?? 'space-m bg-HB / -Black'}} / round" localstorage-id>
{{-- <div id="page_{{$loop ?? '999'}}" class="I aura Plot -mbl -auto / OnOff / Bone / {{$css ?? 'space-m bg-white'}} / round" localstorage-id> --}}

    <div class="_head">
        @include('zUTIN._wrap.A4.brick.close')
        {!!$slot!!}
        <div class="paragraphX2"></div>
    </div>
    <div class="_body _off / flex dC cI cC H-100 / relative">
        <div class="hill"></div>
        <div class="Pente-2 aura">
            <img class="round" src="/Utin/dr_aritmolog/hb.png" alt="">
        </div>
        {{-- <div class="hill-l"></div> --}}
    </div>

</div>
