@extends('zADMIN._shema.index')

@section('title')Категории @endsection

@push('addBread')
<li>
    <span>
        <span class="content-xs">Связи</span>
    </span>
</li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Категории', 'add' => route('admin.category.create')])
    @include('zADMIN.PAGE._lego.filter.SHEMA.index.categories')
@endpush
    
@include('zADMIN.PAGE._lego.filter._lego.filter_for_table.index')
 
@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-categories'])
                @foreach($Categories as $_category)     
                    {{-- @include('zADMIN.combine.Teaser.lib.seo', ['Var' => $_category]) --}}
                    @include('zADMIN._repo.teaser.seo', ['Var' => $_category])
                    @if($_category->childrenCategories)
                        <div class="children -lvl_1 / round">
                            @foreach ($_category->childrenCategories as $childCategory)
                                {{-- @include('zADMIN.combine.Teaser.lib.seo', ['Var' => $childCategory]) --}}
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
