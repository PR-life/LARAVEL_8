@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Item', 'add' => route('admin.item.create'), 'Model' => 'Item'])
    @include('zADMIN.PAGE._lego.filter.SCHEMA.index.items')
@endpush

@component('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['Model' => 'Item', 'model' => 'item'])
    @component('zADMIN._wrap.manager.btn.localStorage_toggle',['css' => 'x-exclude'])
        @slot('localstorageName','filter_btn_table_mockupLink')
        @slot('dataCheck','y-mockupLinkOff')
        @slot('nodeName','Table_index')
        @slot('toggleCss','y-mockupLinkOff')
        @slot('name','mockup link')
    @endcomponent

    @include('zADMIN.PAGE._lego.filter._lego.filter_for_table.lego.btn_levels')
    @component('zADMIN._wrap.manager.btn.localStorage_toggle',['css' => 'x-include'])
        @slot('localstorageName','filter_btn_table_Tree')
        @slot('dataCheck','y-treeOn')
        @slot('nodeName','Table_index')
        @slot('toggleCss','y-treeOn')
        @slot('name','Tree')
    @endcomponent
@endcomponent