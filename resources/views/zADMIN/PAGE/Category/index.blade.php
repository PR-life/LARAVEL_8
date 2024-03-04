@extends('zADMIN._shema.index')

@section('title')Admin @endsection

@push('addBread')
<li>
    <span>
        <span class="content-xs">Контент</span>
    </span>
</li>
@endpush

@push('topAfter')
    @include('zADMIN.PAGE._lego.filter.btn.content')
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Категории', 'add' => route('admin.category.create'), 'ico' => 'barMenu_relations'])
    @include('zADMIN.PAGE._lego.filter.SHEMA.index.categories')
    @include('zADMIN.PAGE._lego.filter.table-index', ['Var' => 'category'])
@endpush

 

@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN.PAGE._wrap.Table.index', ['css'=> '-posts'])
                @foreach($Categories as $_category)     
                    @include('zADMIN.combine.Teaser.lib.seo', ['Var' => $_category])
                    @if($_category->childrenCategories)
                        <div class="children -lvl_1 / round">
                            @foreach ($_category->childrenCategories as $childCategory)
                                @include('zADMIN.combine.Teaser.lib.seo', ['Var' => $childCategory])
                            @endforeach
                        </div>
                    @endif
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $Categories])
        @endcomponent
    @endcomponent

@endsection
