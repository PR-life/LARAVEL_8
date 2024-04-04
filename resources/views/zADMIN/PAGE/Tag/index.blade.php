@extends('zADMIN._shema.index')

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
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Теги', 'add' => route('admin.tag.create'), 'ico' => 'barMenu_relations'])
    @include('zADMIN.PAGE._lego.filter.table-index', ['Var' => 'tag'])
@endpush

 

@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-tags'])

            @foreach($tags as $tag)
                @include('zADMIN.combine.Teaser.lib.Tag.seo')
            @endforeach

            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $tags])
        @endcomponent
    @endcomponent

@endsection
