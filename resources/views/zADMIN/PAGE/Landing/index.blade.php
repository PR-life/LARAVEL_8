@extends('zADMIN._schema.index')

@section('title')Landings @endsection

@push('addBread')
    <li>
        <span>
            <span class="content-xs">Target</span>
        </span>
    </li>
@endpush


@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Landing', 'add' => route('admin.landing.create'), 'Model' => 'Landing'])
    {{-- @include('zADMIN.PAGE._lego.filter.SHEMA.index.posts') --}}
@endpush

@include('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['Model' => 'Landing', 'model' => 'landing'])

 

@section('content')
    @component('zADMIN._wrap.index', ['css' => 'relative'])
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-landings', 'Model' => 'Landing'])
                @foreach($landings as $_landing)     
                    @include('zADMIN._repo.teaser.seo', ['Var' => $_landing])
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $landings])
        @endcomponent
    @endcomponent
@endsection
