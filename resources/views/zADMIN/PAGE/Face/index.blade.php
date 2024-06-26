@extends('zADMIN._schema.index')

@section('title')Материалы @endsection

@push('addBread')
    <li>
        <span>
            <span class="content-xs">CRM</span>
        </span>
    </li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Все профили', 'add' => route('admin.crm.face.create'), 'Model' => 'Face'])
    {{-- @include('zADMIN.PAGE._lego.filter.SHEMA.index.faces') --}}
    {{-- @include('zADMIN.PAGE._lego.filter.SHEMA.index.customers') --}}
@endpush

{{-- @include('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['Model' => 'Face', 'model' => 'face']) --}}


@section('content')

    @component('zADMIN._wrap.index', ['css' => 'relative'])
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-faces', 'Model' => 'Face'])

                {{-- @include('zADMIN.combine.Teaser.lib.gaud.heade_customer') --}}
                @foreach($faces as $_face)     
                    @include('zADMIN._repo.teaser.customer', ['Var' => $_face])
                @endforeach

            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $faces])
        @endcomponent
    @endcomponent

@endsection
