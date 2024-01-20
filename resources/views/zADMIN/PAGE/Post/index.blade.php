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
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Материалы', 'add' => route('admin.post.create'), 'ico' => 'barMenu_editorial'])
    @include('zADMIN.PAGE._lego.filter.SHEMA.index.posts')
    @include('zADMIN.PAGE._lego.filter.table-index', ['Var' => 'post'])
@endpush

 

@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN.PAGE._wrap.Table.index', ['css'=> '-posts'])
                @foreach($posts as $post)     
                    @include('zADMIN.combine.Teaser.lib.seo', ['Var' => $post])
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $posts])
        @endcomponent
    @endcomponent

@endsection
