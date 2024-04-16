<div id="Edit" class="flex W-100 / Edge -flaber / -Sms sms-bar / -KIRA / relative" check-localstorage="{{$id ?? 'Flaber_edit'}}" data-check='off'>

    <div class="edit-main / W-100 edge-flaber">
        {!!$slot!!}
    </div>
    
    @component('_wrap.Flaber.index')
        @slot('id', $id ?? 'Flaber_edit')
        @slot('data', "data-click data-css data-node='parent' data-toggle='off' data-localStorage localStorage-id")

        <div class="HWin / sms-off" data-stopClick></div>
        
        <div class="Plot -h sms-plot / flex dC cI / sms-hidden" data-stopClick>
            <div class="Bee"></div>
            <div class="Ico / pointer" data-click data-goto='{{$id ?? 'Flaber_edit'}}' data-foo='click'>
                @svg('info')
            </div>
        </div>

        @include('zADMIN._wrap.Flaber.lego.wrap')
    @endcomponent
</div>