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
    @include('zADMIN.PAGE._lego.filter.SCHEMA.index.categories')
@endpush
    
@component('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['Model' => 'Category', 'model' => 'category'])
    @include('zADMIN.PAGE._lego.filter._lego.filter_for_table.brick.btn_lvl_1')
    @component('zADMIN._wrap.manager.btn.localStorage_toggle',['css' => 'x-exclude'])
        @slot('localstorageName','filter_btn_table_level_1')
        @slot('dataCheck','y-childrenLevel_1_off')
        @slot('nodeName','Table_index')
        @slot('toggleCss','y-childrenLevel_1_off')
        @slot('name','lvl 2')
    @endcomponent
    @component('zADMIN._wrap.manager.btn.localStorage_toggle',['css' => 'x-exclude'])
        @slot('localstorageName','filter_btn_table_level_2')
        @slot('dataCheck','y-childrenLevel_2_off')
        @slot('nodeName','Table_index')
        @slot('toggleCss','y-childrenLevel_2_off')
        @slot('name','lvl 3')
    @endcomponent
    @component('zADMIN._wrap.manager.btn.localStorage_toggle',['css' => 'x-exclude'])
        @slot('localstorageName','filter_btn_table_level_3')
        @slot('dataCheck','y-childrenLevel_3_off')
        @slot('nodeName','Table_index')
        @slot('toggleCss','y-childrenLevel_3_off')
        @slot('name','lvl 4')
    @endcomponent
    @component('zADMIN._wrap.manager.btn.localStorage_toggle',['css' => 'x-exclude'])
        @slot('localstorageName','filter_btn_table_childrenLevel')
        @slot('dataCheck','y-childrenLevelOff')
        @slot('nodeName','Table_index')
        @slot('toggleCss','y-childrenLevelOff')
        @slot('name','children')
    @endcomponent
@endcomponent


@section('content')
    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-categories', 'Model' => 'Category', 'localstoragePicking' => 'filter_btn_table_parent
            filter_btn_table_level_1
            filter_btn_table_level_2
            filter_btn_table_level_3
            filter_btn_table_childrenLevel
            '])


            {{-- старый код ля 2 уровней --}}
                {{-- @foreach($Categories as $_category)   
                    @include('zADMIN._repo.teaser.seo', ['Var' => $_category, 'css' => ' parent'])
                    @if($_category->childrenCategories->isNotEmpty())
                        <div class="children -lvl_1 / round">
                            @foreach ($_category->childrenCategories as $childCategory)
                                @include('zADMIN._repo.teaser.seo', ['Var' => $childCategory])
                            @endforeach
                        </div>
                    @endif
                @endforeach --}}


                @foreach($Categories as $_category)   
                    @include('zADMIN._repo.teaser.seo', ['Var' => $_category, 'css' => ' parent'])
                    
                    @if($_category->childrenCategories->isNotEmpty())
                        <div class="children -lvl_{{ $_level ?? 1 }} / round">
                            @include('zADMIN._repo.category-tree', ['Categories' => $_category->childrenCategories, '_level' => ($_level ?? 1) + 1])
                        </div>
                    @endif
                @endforeach



            @endcomponent
            {{-- @include('zADMIN.mod.paginator', ['Var' => $Categories]) --}}
        @endcomponent
    @endcomponent
@endsection

 
