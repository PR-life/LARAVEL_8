@extends('zADMIN._shema.index')

@section('title')Admin @endsection

@push('addBread')
    <li>
        <span>
            <span class="content-xs">Офис</span>
        </span>
    </li>
@endpush

@push('topAfter')
    {{-- @include('zADMIN.PAGE._lego.filter.btnVol') --}}
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Пользователи', 'add' => route('admin.user.create')])
    {{-- @include('zADMIN.PAGE._lego.filter.table-index', ['Var' => 'tag']) --}}
@endpush

 
@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-users'])

            @foreach($users as $_user)
                @include('zADMIN.combine.Teaser.lib.user', ['Var' => $_user])
            @endforeach

            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $users])
        @endcomponent
    @endcomponent

@endsection
