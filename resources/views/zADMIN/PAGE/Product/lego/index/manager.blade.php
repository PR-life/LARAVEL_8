@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Товары', 'add' => route('admin.product.create'), 'Model' => 'Product'])
    @include('zADMIN.PAGE._lego.filter.SHEMA.index.products')
@endpush

@component('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['Model' => 'Product', 'model' => 'product'])
    @component('zADMIN._wrap.manager.btn.localStorage_toggle',['css' => 'x-exclude'])
        @slot('localstorageName','filter_btn_table_mockupLink')
        @slot('dataCheck','y-mockupLinkOff')
        @slot('nodeName','Table_index')
        @slot('toggleCss','y-mockupLinkOff')
        @slot('name','mockup link')
    @endcomponent
@endcomponent