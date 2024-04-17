@extends('zADMIN._shema.index')

@section('title')Item @endsection

@push('addBread')
    <li>
        <span>
            <span class="content-xs">Контент</span>
        </span>
    </li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Item', 'add' => route('admin.item.create'), 'Model' => 'Item'])
    @include('zADMIN.PAGE._lego.filter.SHEMA.index.items')
@endpush

@component('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['Model' => 'Item', 'model' => 'item'])
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
            @component('zADMIN._wrap.Table.index', ['css'=> '-items', 'Model' => 'Item', 'localstoragePicking' => 'filter_btn_table_mockupLink'])
                @foreach($items as $_item)     
                    @include('zADMIN._repo.teaser.seo', ['Var' => $_item])
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $items])
        @endcomponent
    @endcomponent

@endsection