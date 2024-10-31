@component('zADMIN._wrap.index', ['css' => 'relative'])
@component('zADMIN._wrap.max', ['css' => 'index'])
    @component('zADMIN._wrap.Table.index', ['css'=> '-items', 'Model' => 'Item', 'localstoragePicking' => 'filter_btn_table_mockupLink filter_btn_table_Tree'])
    {!!$slot!!}
    @endcomponent
    {{-- @include('zADMIN.mod.paginator', ['Var' => $items]) --}}
@endcomponent
@endcomponent