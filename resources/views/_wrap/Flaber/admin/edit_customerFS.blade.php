<div id="wrap_edit_customerFS" class="flex W-100 / Edge -flaber / SOMA / -Sms sms-bar / -KIRA / relative" check-localstorage="{{$id ?? 'Flaber_edit'}}" data-check='On'>

    <div class="_l W-100 {{$css_l ?? ''}} / relative index" {!!$width_l ?? 'style="max-width:55vw"'!!}>
        {!!$slot!!}
    </div>

    @component('_wrap.Flaber.index')
        @slot('id', $id ?? 'Flaber_edit')
        @slot('data', "data-click data-css data-node='parent' data-toggle='On' data-localStorage localStorage-id")
        @slot('style_off','ARIK')
        @slot('before_Flaber',$before_Flaber ?? '')
 

        <div class="off / Plot plot-h / bg-aside / flex dC cI" data-stopClick>
            <div class="paragraph"></div>
            <div class="Ico / pointer" data-click data-goto='{{$id ?? 'Flaber_edit'}}' data-foo='click'>
                @svg('info')
            </div>
        </div>
        {!!$indent_Flaber ?? ''!!}
        @include('_wrap.Flaber.admin.lego.wrap')
    @endcomponent

</div>