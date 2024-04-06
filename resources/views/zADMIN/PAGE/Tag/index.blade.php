@extends('zADMIN._shema.index')

@section('title')Теги @endsection

@push('addBread')
<li>
    <span>
        <span class="content-xs">Контент</span>
    </span>
</li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Теги', 'add' => route('admin.tag.create')])
    {{-- @include('zADMIN.PAGE._lego.filter.SHEMA.index.tags') --}}
@endpush

 

@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-tags'])

            @foreach($tags as $_tag)
                @include('zADMIN._repo.teaser.tag', ['Var' => $_tag])
            @endforeach

            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $tags])
        @endcomponent
    @endcomponent

@endsection
