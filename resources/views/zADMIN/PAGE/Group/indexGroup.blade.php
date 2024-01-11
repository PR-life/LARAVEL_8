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
    @include('zADMIN.PAGE._lego.filter.btnVol')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Теги', 'add' => route('admin.tag.create'), 'ico' => 'barMenu_relations'])
    @include('zADMIN.PAGE._lego.filter.table-index', ['Var' => 'tag'])
@endpush

 

@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN.PAGE._wrap.Table.index', ['css'=> '-tags'])

            <div class="Grid -gap x4">
                @foreach($categories as $category)
                    {{-- @if(count($category->tags) > 0) --}}
                        <div class="x-23101446 / space-s round">
                            <div class="content-s center-text Grey -c50">{{$category->name}}</div>
                            @foreach($tags as $tag)
                                @if($category->id == $tag->category_id)
                                    @include('zADMIN.combine.Teaser.lib.tag.seo')
                                @endif
                            @endforeach
                        </div>
                    {{-- @endif --}}
                @endforeach
            </div>



            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $tags])
        @endcomponent
    @endcomponent

@endsection
