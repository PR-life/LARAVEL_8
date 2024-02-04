<div id="page_{{$loop ?? '999'}}" class="I aura / Plot -h x-main / OnOff / Bone / {{$css ?? 'space-m bg-white'}} / round" localstorage-id>

    
    @include('UTIN._wrap.A4.brick.close')
    <div class="flex dC cI cC">
        <div class="hill-s"></div>
 
        {!!$slot!!}
        <div class="paragraph"></div>
        <div class="paragraph"></div>
        <div class="hill-s none_PC"></div>
    </div>

    <div class="H-100 _off / Grid x3 -gap">
        <div class="_cell _1 / flex dC bC_PC / space void / relative">
            {!!$cell_1 ?? ''!!}
            <div class="paragraph net none_PC"></div>
        </div>
        <div class="_cell _2 / flex dC bC_PC / space void / relative">
            {!!$cell_2 ?? ''!!}
            <div class="paragraph net none_PC"></div>
        </div>
        <div class="_cell _3 / flex dC bC_PC / space void / relative">
            {!!$cell_3 ?? ''!!}
            <div class="paragraph net none_PC"></div>
        </div>
    </div>

</div>