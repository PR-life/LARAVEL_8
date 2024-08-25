@extends('zADMIN._schema.index')

@section('title')Product @endsection

@push('addBread')
    <li>
        <span>
            <span class="content-xs">Контент</span>
        </span>
    </li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Товары', 'add' => route('admin.product.create'), 'Model' => 'Product'])
    {{-- @include('zADMIN.PAGE._lego.filter.SHEMA.index.items') --}}
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

@section('content')

    @component('zADMIN._wrap.index', ['css' => 'relative'])
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-products', 'Model' => 'Product', 'localstoragePicking' => 'filter_btn_table_mockupLink'])
                @foreach($products as $_product)     
                    @include('zADMIN._repo.teaser.seo', ['Var' => $_product])
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $products])
        @endcomponent
    @endcomponent

@endsection
