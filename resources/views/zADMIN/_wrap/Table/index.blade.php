<div id="Table_index" class="relative" data-localstorage localstorage-picking='filter_btn_table_full filter_btn_table_empty filter_btn_table_title filter_btn_table_description filter_btn_table_tags filter_btn_table_category filter_btn_table_statusActive filter_btn_table_statusPause filter_btn_table_level_3 filter_btn_table_level_2 filter_btn_table_level_1 filter_btn_table_parent filter_btn_table_childrenLevel {{$localstoragePicking ?? ''}}'>
    <div id="trigger_table_index" class="Table space-left / triggerGap / {{$css ?? ''}}" check-localstorage="trigger_model_{{$Model}}" localstorage-reverse data-check="active" param="triggerGap">
        {!!$slot!!}
    </div>
</div>