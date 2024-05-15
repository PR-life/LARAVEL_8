<div id="wrap_edit_customerFS" class="flex W-100 / Edge -flaber / SOMA / -Sms sms-bar / -KIRA / relative" 
    check-localstorage="{{$id ?? 'Flaber_edit'}}" data-check='On'
    {{-- check-localstorage='Wrap_edit_customerFS' data-check='On'
    data-toggle='On'
    data-click data-css 
    data-localstorage localstorage-id --}}
>

{{-- <div class="_Axon / flex space-right" data-stopClick5555> --}}

    <div class="_l W-100 {{$css_l ?? ''}} / relative index" {!!$width_l ?? 'style="max-width:55vw"'!!}>
        {!!$slot!!}
    </div>


    @component('_wrap.Flaber.index')
        @slot('id', $id ?? 'Flaber_edit')
        @slot('data', "data-click data-css data-node='parent' data-toggle='On' data-localStorage localStorage-id")
        @slot('style_off','ARIK')

        <div class="none on / HWin" data-stopClick></div>
        <div class="off / Plot plot-h / bg-aside / flex dC cI" data-stopClick>
            <div class="paragraph"></div>
            <div class="Ico / pointer" data-click data-goto='{{$id ?? 'Flaber_edit'}}' data-foo='click'>
                @svg('info')
            </div>
        </div>

        @include('_wrap.Flaber.admin.lego.wrap')
    @endcomponent
    
    {{-- <div class="_r _Axon Axon / 387W-100 {{$css_r643 ?? 'Max -w6'}} / hidden index relative">

        <div class="off / Abs -all pointer / flex dC cI / _indexMax" data-click data-goto='wrap_edit_customerFS' data-foo='click'>
            <div class="paragraph noEvents"></div>
            <div class="Ico noEvents">
                @svg('info')
            </div>
        </div>

        <div class="none on / Abs -rt pointer / _indexMax" data-click data-goto='wrap_edit_customerFS' data-foo='click'>
            <div class="Ico -S / space contentBox noEvents">
                @svg('close')
            </div>
        </div>
        {!!$_rTop ?? ''!!}
        <div class="none on / relative">
            {!!$_r!!}
        </div>

        <div class="none on / Min -w6"></div>
        <div class="ARIK -XL -On"></div>
    </div> --}}

{{-- </div> --}}
</div>