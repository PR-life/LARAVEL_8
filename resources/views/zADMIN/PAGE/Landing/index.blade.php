@extends('zADMIN._shema.index')

@section('title')Landings @endsection

@push('addBread')
<li>
    <span>
        <span class="content-xs">Target</span>
    </span>
</li>
@endpush


@push('topAfter')
    @include('zADMIN.PAGE._lego.filter.btnVol')
@endpush


@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Landing', 'add' => route('admin.landing.create'), 'ico' => 'barMenu_target'])
    {{-- @include('zADMIN.PAGE._lego.filter.SHEMA.index.items') --}}
    {{-- @include('zADMIN.PAGE._lego.filter.table-index', ['Var' => 'item']) --}}

    {{-- @include('zADMIN.PAGE._lego.filter.btnVol')
 
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Landings', 'add' => route('admin.landing.create'), 'ico' => 'barMenu_target'])
 
    @include('zADMIN.PAGE._lego.filter.SHEMA.index.categories')
    @include('zADMIN.PAGE._lego.filter.table-index', ['Var' => 'landing'])
    @include('zADMIN.PAGE._lego.filter.table-indexSeo') --}}
@endpush

 

@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN.PAGE._wrap.Table.index', ['css'=> '-landings'])
                @foreach($landings as $landing)     
                    @include('zADMIN.combine.Teaser.lib.seo', ['Var' => $landing])
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $landings])
        @endcomponent
    @endcomponent

@endsection
