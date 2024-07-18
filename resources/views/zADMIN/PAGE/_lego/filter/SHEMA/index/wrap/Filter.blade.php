<div id="Filter" class="flex {{$triggerShow ?? 'none'}} / space-leftS">
    <div class="filter-{{$Model ?? ''}} / relative _indexMax" check-localstorage='Filter' data-check='active' param='Block'>
        <form id="form_filter_{{$Model ?? ''}}" class="Form {{$cssForm ?? '-S'}} / flex cI / cross-xxs">
            {!!$slot!!}
        </form>
    </div>
</div>