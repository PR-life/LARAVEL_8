<div id="Filter" class="{{$triggerShow ?? 'none'}} / space-leftS" check-localstorage='Filter' data-check='active' param='Block'>
    <div class="flex">
        <div class="filter-{{$Model ?? ''}} / relative _indexMax">
            <form id="form_filter_{{$Model ?? ''}}" class="Form {{$cssForm ?? '-S'}} / flex cI / cross-xxs">
                {!!$slot!!}
            </form>
        </div>
    </div>
</div>