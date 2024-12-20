@extends('zADMIN._schema.index')

@section('title')details @endsection

@push('addBread')
<li>
    <span>
        <span class="content-xs">Контент</span>
    </span>
</li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'details', 'add' => route('admin.detail.create'), 'Model' => 'Detail'])
    {{-- @include('zADMIN.PAGE._lego.filter.SCHEMA.index.tags') --}}
@endpush


@component('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['model' => 'detail', 'Model' => 'Detail','hidden_btn_full' => true])
    @component('zADMIN._wrap.manager.btn.localStorage_toggle',['css' => 'x-exclude'])
        @slot('localstorageName','filter_btn_table_backend')
        @slot('dataCheck','y-backendOff')
        @slot('nodeName','Table_index')
        @slot('toggleCss','y-backendOff')
        @slot('name','Backend')
    @endcomponent
    @component('zADMIN._wrap.manager.btn.localStorage_toggle',['css' => 'x-exclude'])
        @slot('localstorageName','filter_btn_table_frontend')
        @slot('dataCheck','y-frontendOff')
        @slot('nodeName','Table_index')
        @slot('toggleCss','y-frontendOff')
        @slot('name','Frontend')
    @endcomponent
@endcomponent


@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-details', 'Model' => 'Detail','localstoragePicking' => 'filter_btn_table_frontend filter_btn_table_backend'])

            @foreach($details as $_detail)
                @include('zADMIN._repo.teaser.detail', ['Var' => $_detail])
            @endforeach

            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $details])
        @endcomponent
    @endcomponent

@endsection
