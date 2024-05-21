<div id="wrap_edit" class="flex W-100 / Edge -flaber / SOMA / -Sms sms-bar / -KIRA / relative" check-localstorage="{{$id ?? 'Flaber_edit'}}" data-check='On'>

    <div class="_l W-100 {{$css_l ?? ''}} / edge-flaber">
        {!!$slot!!}
    </div>

    @component('_wrap.Flaber.index')
        @slot('id', $id ?? 'Flaber_edit')
        @slot('data', "data-click data-css data-node='parent' data-toggle='On' data-localStorage localStorage-id")

        <div class="none on / HWin" data-stopClick></div>
        
        <div class="off / Plot plot-h / bg-aside / flex dC cI" data-stopClick>
            <div class="Bee"></div>
            <div class="Ico / pointer" data-click data-goto='{{$id ?? 'Flaber_edit'}}' data-foo='click'>
                @svg('info')
            </div>
        </div>

        @include('_wrap.Flaber.admin.lego.wrap_content')
    @endcomponent
</div>