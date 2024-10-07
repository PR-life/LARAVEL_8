@component('zADMIN._wrap.index', ['css' => 'relative'])
@component('zADMIN._wrap.max', ['css' => 'index'])
    @component('zADMIN._wrap.Table.index', ['css'=> '-products', 'Model' => 'Product', 'localstoragePicking' => 'filter_btn_table_mockupLink filter_btn_table_Tree'])
    {!!$slot!!}
    @endcomponent
    {{-- @include('zADMIN.mod.paginator', ['Var' => $products]) --}}
@endcomponent
@endcomponent