<div id="Table_index" class="relative" data-localstorage localstorage-picking='filter_btn_table_full filter_btn_table_empty filter_btn_table_title filter_btn_table_description filter_btn_table_tags filter_btn_table_category filter_btn_table_statusActive filter_btn_table_statusPause {{$localstoragePicking ?? ''}}'>
    <div id="trigger_table_index" class="Table space-left / triggerGap / {{$css ?? ''}}" check-localstorage="trigger_model_{{$Model}}" localstorage-reverse data-check="active" param="triggerGap">
        {!!$slot!!}
    </div>
</div>


{{-- <div id="Table_index" class="relative" data-localstorage localstorage-picking='filter_btn_table_full filter_btn_table_empty filter_btn_table_title filter_btn_table_description filter_btn_table_tags filter_btn_table_category filter_btn_table_statusActive filter_btn_table_statusPause'>
    <div id="trigger_table_index" class="Table space-left {{$css ?? ''}}" data-localstorage localstorage-name='wrap'>
        {!!$slot!!}
    </div>
</div>


check-localstorage="trigger_model_group"
data-check="active"
param="trigger"

<div class="-Btn space-s round-xs pointer / slim / none D-Seo -on" data-click="" data-node="wrap" data-css="" data-remove="vol-seo" data-loop="" data-localstorage="" localstorage-name="wrap">
    <span class="content-xxs / noEvents">seo</span>
</div> --}}