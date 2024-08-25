@extends('zADMIN._schema.index')

@section('title')Admin @endsection

@push('addBread')
<li>
    <span>
        <span class="content-xs">Контент</span>
    </span>
</li>
@endpush

@push('bee')
    @include('zADMIN.PAGE._lego.filter.btn.content')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Теги', 'add' => route('admin.feature.create'), 'ico' => 'barMenu_relations'])
    @include('zADMIN.PAGE._lego.filter.table-index', ['Var' => 'feature'])
@endpush

 

@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-features'])

            <div class="Grid -gap x4">
                @foreach($categories as $category)
                    {{-- @if(count($category->features) > 0) --}}
                        <div class="x-23101446 / space-s round">
                            <div class="content-s center-text Grey -c50">{{$category->name}}</div>
                            @foreach($features as $feature)
                                @if($category->id == $feature->category_id)
                                    @include('zADMIN.combine.Teaser.lib.Feature.seo')
                                @endif
                            @endforeach
                        </div>
                    {{-- @endif --}}
                @endforeach
            </div>



            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $features])
        @endcomponent
    @endcomponent

@endsection
