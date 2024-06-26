@extends('zADMIN._schema.index')

@section('title')Теги @endsection

@push('addBread')
<li>
    <span>
        <span class="content-xs">Контент</span>
    </span>
</li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Теги', 'add' => route('admin.tag.create'), 'Model' => 'Tag'])
    @include('zADMIN.PAGE._lego.filter.SHEMA.index.tags')
@endpush


@component('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['model' => 'tag', 'Model' => 'Tag','hidden_btn_full' => true])
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
            @component('zADMIN._wrap.Table.index', ['css'=> '-tags', 'Model' => 'Tag','localstoragePicking' => 'filter_btn_table_frontend filter_btn_table_backend'])

            @foreach($tags as $_tag)
                @include('zADMIN._repo.teaser.tag', ['Var' => $_tag])
            @endforeach

            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $tags])
        @endcomponent
    @endcomponent

@endsection
