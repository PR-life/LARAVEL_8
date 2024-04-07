@extends('zADMIN._shema.index')

@section('title')Item @endsection

@push('addBread')
<li>
    <span>
        <span class="content-xs">Контент</span>
    </span>
</li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Item', 'add' => route('admin.item.create')])
    {{-- @include('zADMIN.PAGE._lego.filter.SHEMA.index.papers') --}}
@endpush

@include('zADMIN.PAGE._lego.filter._lego.filter_for_table.index')

@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-papers'])
                @foreach($items as $_item)     
                    @include('zADMIN._repo.teaser.seo', ['Var' => $_item])
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $items])
        @endcomponent
    @endcomponent

@endsection
