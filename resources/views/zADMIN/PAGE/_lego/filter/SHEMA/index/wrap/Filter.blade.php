<div class="flex cross-xs / space-leftS">
    <div id="Filter" class="{{$cssModel}} / relative _indexMax / none" check-localstorage='Filter' data-check='active' param='Block'>
        <form id="form_filter{{$cssModel}}" class="Form -S / flex cI / cross-xxs">
            {!!$slot!!}
        </form>
    </div>
</div>