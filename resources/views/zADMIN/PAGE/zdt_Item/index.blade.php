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
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Услуги', 'add' => route('admin.item.create'), 'ico' => 'barMenu_relations'])
    {{-- @include('zADMIN.PAGE._lego.filter.SHEMA.index.papers') --}}
    @include('zADMIN.PAGE._lego.filter.table-index', ['Var' => 'item'])
@endpush

 

@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN.PAGE._wrap.Table.index', ['css'=> '-items'])
                @foreach($items as $item)     
                    @include('zADMIN.combine.Teaser.lib.seo', ['Var' => $item])
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $items])
        @endcomponent
    @endcomponent

@endsection
