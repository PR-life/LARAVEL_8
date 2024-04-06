@extends('zADMIN._shema.index')

@section('title')Группы @endsection

@push('addBread')
<li>
    <span>
        <span class="content-xs">Связи</span>
    </span>
</li>
@endpush


@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Группы', 'add' => route('admin.group.create')])
@endpush

{{-- @include('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['Model' => 'group']) --}}


@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-group'])
                @foreach($groups as $_group)
                    @include('zADMIN._repo.teaser.tag', ['Var' => $_group])
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $groups])
        @endcomponent
    @endcomponent

@endsection
