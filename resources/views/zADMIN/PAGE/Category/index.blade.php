@extends('zADMIN._schema.index')

@section('title')Категории @endsection

@push('addBread')
    <li>
        <span>
            <span class="content-xs">Связи</span>
        </span>
    </li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Категории', 'add' => route('admin.category.create'), 'Model' => 'Category'])
    @include('zADMIN.PAGE._lego.filter.SHEMA.index.categories')
@endpush
    
{{-- @include('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['Model' => 'Category', 'model' => 'category']) --}}
 
@component('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['Model' => 'Category', 'model' => 'category'])
    @component('zADMIN._wrap.manager.btn.localStorage_toggle',['css' => 'x-exclude'])
        @slot('localstorageName','filter_btn_table_categoryLevelOne')
        @slot('dataCheck','y-categoryLevelOneOff')
        @slot('nodeName','Table_index')
        @slot('toggleCss','y-categoryLevelOneOff')
        @slot('name','lvl 1')
    @endcomponent
    @component('zADMIN._wrap.manager.btn.localStorage_toggle',['css' => 'x-exclude'])
        @slot('localstorageName','filter_btn_table_categoryChildrenLevelOne')
        @slot('dataCheck','y-categoryChildrenLevelOneOff')
        @slot('nodeName','Table_index')
        @slot('toggleCss','y-categoryChildrenLevelOneOff')
        @slot('name','child 1')
    @endcomponent
@endcomponent


@section('content')
    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-categories', 'Model' => 'Category', 'localstoragePicking' => 'filter_btn_table_categoryLevelOne filter_btn_table_categoryChildrenLevelOne'])
                @foreach($Categories as $_category)     
                    @include('zADMIN._repo.teaser.seo', ['Var' => $_category, 'css' => ' parent'])
                    @if($_category->childrenCategories)
                        <div class="children -lvl_1 / round">
                            @foreach ($_category->childrenCategories as $childCategory)
                                @include('zADMIN._repo.teaser.seo', ['Var' => $childCategory])
                            @endforeach
                        </div>
                    @endif
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $Categories])
        @endcomponent
    @endcomponent
@endsection
