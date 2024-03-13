@extends('zADMIN._shema.index')

{{-- @section('title')Клиенты @endsection --}}

@push('addBread')
    <li>
        <span>
            <span class="content-xs">Профили</span>
        </span>
    </li>
@endpush

@push('topAfter')
    @include('zADMIN.PAGE._lego.filter.btn.customer')
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Профили', 'add' => route('admin.crm.face.create')])
    @include('zADMIN.PAGE._lego.filter.SHEMA.index.customers')
@endpush


@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN.PAGE._wrap.Table.index', ['css'=> '-face'])

                @include('zADMIN.combine.Teaser.lib.gaud.heade_customer')
                @foreach($faces as $_face)     
                    @include('zADMIN.combine.Teaser.lib.customer', ['Var' => $_face])
                @endforeach

            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $faces])
        @endcomponent
    @endcomponent

@endsection
