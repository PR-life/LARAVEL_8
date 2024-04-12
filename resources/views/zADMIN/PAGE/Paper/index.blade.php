@extends('zADMIN._shema.index')

@section('title')Статьи @endsection

@push('addBread')
    <li>
        <span>
            <span class="content-xs">Контент</span>
        </span>
    </li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Paper', 'add' => route('admin.paper.create'), 'Model' => 'Paper'])
    @include('zADMIN.PAGE._lego.filter.SHEMA.index.papers')
@endpush

@include('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['Model' => 'Paper', 'model' => 'paper'])

@section('content')

    @component('zADMIN._wrap.index', ['css' => 'relative'])
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-papers', 'Model' => 'Paper'])
                @foreach($papers as $paper)     
                    @include('zADMIN._repo.teaser.seo', ['Var' => $paper])
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $papers])
        @endcomponent
    @endcomponent

@endsection
