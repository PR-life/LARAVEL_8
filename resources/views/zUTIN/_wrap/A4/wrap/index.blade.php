<div id="page_{{$loop ?? '999'}}" class="I aura / Plot {{$cssPlot ?? 'plot-h -S'}} / Bone / OnOff / Utin {{$cssUtin ?? 'space-m bg-white'}} / round index relative" localstorage-id>
    @include('zUTIN._wrap._lego.head.index', ['Font' => $Font])
    <div class="_body _Off H-100 {{$cssBody ?? ''}} / relative">
        {!!$slot!!}
        {{-- <div class="paragraphX2"></div> --}}
        <div class="H-100 / Grid {{$cssGrid}}">
            {!!$cell!!}
        </div>
    </div>
</div>