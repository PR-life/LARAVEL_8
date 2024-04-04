@extends('zADMIN._shema.index')

@section('title')Admin @endsection

@push('addBread')
<li>
    <span>
        <span class="content-xs">Контент</span>
    </span>
</li>
@endpush


@push('bee')
    @include('zADMIN.PAGE._lego.filter.btn.content')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Группы', 'add' => route('admin.group.create'), 'ico' => 'barMenu_relations'])
    {{-- @include('zADMIN.PAGE._lego.filter.table-index', ['Var' => 'group']) --}}
@endpush

 

@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-group'])
                @foreach($groups as $group)
                    @include('zADMIN.combine.Teaser.lib.group.index')
                @endforeach
            @endcomponent
            {{-- @include('zADMIN.mod.paginator', ['Var' => $groups]) --}}
        @endcomponent
    @endcomponent

@endsection
