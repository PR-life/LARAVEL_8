<div id="Wrap_edit_customerFS" class="OnOff" 
    check-localstorage='Wrap_edit_customerFS' data-check='On'
    data-toggle='On'
    data-click data-css 
    data-localstorage localstorage-id
>
<div class="flex space-right" data-stopClick>

    <div class="_l / {{$css_l ?? 'Article'}} W-100 / relative index">
        {!!$slot!!}
    </div>

    <div id="Wrap_edit_right_customerFS" class="_r / {{$css_r ?? 'Max -w6'}} / hidden index relative">

        <div class="_Off / Abs -all pointer / flex dC cI / _indexMax" data-click data-goto='Wrap_edit_customerFS' data-foo='click'>
            <div class="paragraph"></div>
            <div class="Ico">
                @svg('info')
            </div>
        </div>

        <div class="_Open / Abs -rt pointer / _indexMax" data-click data-goto='Wrap_edit_customerFS' data-foo='click'>
            <div class="Ico -S / space contentBox">
                @svg('close')
            </div>
        </div>
        {!!$_rTop ?? ''!!}
        <div class="_Open / relative">
            {!!$_r!!}
        </div>

        <div class="ARIK -XL -On"></div>
    </div>

</div>
</div>