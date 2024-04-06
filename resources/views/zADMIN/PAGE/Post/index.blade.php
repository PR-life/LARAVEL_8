@extends('zADMIN._shema.index')

@section('title')Материалы @endsection

@push('addBread')
<li>
    <span>
        <span class="content-xs">Контент</span>
    </span>
</li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Материалы', 'add' => route('admin.post.create')])
    @include('zADMIN.PAGE._lego.filter.SHEMA.index.posts')
@endpush

@include('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['Model' => 'post'])

@section('content')

    @component('zADMIN._wrap.index', ['css' => 'relative'])
        @component('zADMIN._wrap.max', ['css' => null])
            @component('zADMIN._wrap.Table.index', ['css'=> '-posts'])
                @foreach($posts as $_post)     
                    @include('zADMIN._repo.teaser.seo', ['Var' => $_post])
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $posts])
        @endcomponent
    @endcomponent

@endsection




{{-- 
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
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Материалы', 'add' => route('admin.post.create'), 'ico' => 'barMenu_editorial'])
    @include('zADMIN.PAGE._lego.filter.SHEMA.index.posts')
@endpush

@push('beeAfter')
    @include('zADMIN.PAGE._lego.filter.table-index', ['Var' => 'post'])
@endpush

@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-posts'])
                @foreach($posts as $post)     
                    @include('zADMIN.combine.Teaser.lib.seo', ['Var' => $post])
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $posts])
        @endcomponent
    @endcomponent

@endsection 


--}}
