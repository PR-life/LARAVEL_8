@extends('zADMIN._shema.index')

@section('title')Admin @endsection

@push('addBread')
<li>
    <span>
        <span class="content-xs">Пользователи</span>
    </span>
</li>
@endpush

@push('bee')
    <div class="paragraph"></div>
    {{-- @include('zADMIN.PAGE._lego.filter.btn.content') --}}
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Пользователи', 'add' => route('admin.user.create'), 'ico' => 'barMenu_office'])
    {{-- @include('zADMIN.PAGE._lego.filter.table-index', ['Var' => 'tag']) --}}
@endpush

 

@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN.PAGE._wrap.Table.index', ['css'=> '-tags'])

            @foreach($users as $_user)
                @include('zADMIN.combine.Teaser.lib.user', ['Var' => $_user])
            @endforeach

            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $users])
        @endcomponent
    @endcomponent

@endsection
