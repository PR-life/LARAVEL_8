@extends('zADMIN._schema.index')

@section('title')Особенности @endsection

@push('addBread')
<li>
    <span>
        <span class="content-xs">Контент</span>
    </span>
</li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Особенности', 'add' => route('admin.feature.create'), 'Model' => 'Feature'])
    {{-- @include('zADMIN.PAGE._lego.filter.SCHEMA.index.tags') --}}
@endpush


@component('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['model' => 'feature', 'Model' => 'Feature','hidden_btn_full' => true])
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
            @component('zADMIN._wrap.Table.index', ['css'=> '-features', 'Model' => 'Feature','localstoragePicking' => 'filter_btn_table_frontend filter_btn_table_backend'])

            @foreach($features as $_feature)
                @include('zADMIN._repo.teaser.tag', ['Var' => $_feature])
            @endforeach

            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $features])
        @endcomponent
    @endcomponent

@endsection
