@extends('zADMIN._schema.index')

@section('title')Collections @endsection

@push('addBread')
    <li>
        <span>
            <span class="content-xs">Collections</span>
        </span>
    </li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Collections', 'add' => route('admin.collection.create'), 'Model' => 'Collection'])
    {{-- @include('zADMIN.PAGE._lego.filter.SCHEMA.index.categories') --}}
@endpush
    
{{-- @component('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['Model' => 'Collection', 'model' => 'collection'])
    @include('zADMIN.PAGE.Category.lego.index.filter_for_table')
@endcomponent --}}


@section('content')
    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-collections', 'Model' => 'Collection', 'localstoragePicking' => 'filter_btn_table_parent
            filter_btn_table_level_1
            filter_btn_table_level_2
            filter_btn_table_level_3
            filter_btn_table_childrenLevel
            '])

                @foreach($Collections as $_collection)   
                    @include('zADMIN._repo.teaser.collection', ['Var' => $_collection, 'css' => ' parent'])
                    
                    {{-- @if($_category->childrenCategories->isNotEmpty())
                        <div class="children -lvl_{{ $_level ?? 1 }} / round">
                            @include('zADMIN._repo.category-tree', ['Categories' => $_category->childrenCategories, '_level' => ($_level ?? 1) + 1])
                        </div>
                    @endif --}}
                @endforeach

            @endcomponent
            {{-- @include('zADMIN.mod.paginator', ['Var' => $Categories]) --}}
        @endcomponent
    @endcomponent
@endsection

 
