<div class="space / flex">
    <div id="Filter" class="{{$cssModel}} / none _indexMax" check-localstorage='Filter' data-check='active' param='Block'>
        <form id="form_filter{{$cssModel}}" class="Form -S / flex cI / cross-xxs">
            {!!$slot!!}
        </form>
    </div>
</div>