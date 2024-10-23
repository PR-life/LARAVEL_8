@extends('zADMIN._schema.index')

@section('title')Пользователи @endsection

@push('addBread')
<li>
    <span>
        <span class="content-xs">Офис</span>
    </span>
</li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Пользователи', 'add' => route('admin.user.create'), 'Model' => 'User'])
    @include('zADMIN.PAGE._lego.filter.SCHEMA.index.users')
@endpush

@include('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['model' => 'user', 'Model' => 'User'])
 

@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-users', 'Model' => 'User'])

            @foreach($users as $_user)
                @include('zADMIN._repo.teaser.user', ['Var' => $_user])
            @endforeach

            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $users])
        @endcomponent
    @endcomponent

@endsection
