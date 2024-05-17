@extends('zADMIN._shema.index')

{{-- @section('title')Клиенты @endsection --}}

@push('addBread')
    <li>
        <span>
            <span class="content-xs">Клиенты</span>
        </span>
    </li>
@endpush

{{-- @push('topAfter')
    @include('zADMIN.PAGE._lego.filter.btn.customer')
@endpush --}}

@push('bee')
    {{-- @include('zADMIN._lego.Bee.nameIndex',['name' => 'Клиенты', 'add33' => route('admin.crm.customer.create'), 'ico' => 'barMenu_custome333r']) --}}
    {{-- @include('zADMIN.PAGE._lego.filter.SHEMA.index.customers') --}}
@endpush


@section('content')

    {{-- @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-face'])

                @include('zADMIN.combine.Teaser.lib.gaud.heade_customer')
                @foreach($faces as $_face)     
                    @include('zADMIN.combine.Teaser.lib.customer', ['Var' => $_face])
                @endforeach

            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $faces])
        @endcomponent
    @endcomponent --}}

@endsection
