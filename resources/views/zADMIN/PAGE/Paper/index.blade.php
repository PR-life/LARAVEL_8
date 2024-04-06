@extends('zADMIN._shema.index')

@section('title')Статьи @endsection

@push('addBread')
<li>
    <span>
        <span class="content-xs">Контент</span>
    </span>
</li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Статьи', 'add' => route('admin.paper.create')])
    @include('zADMIN.PAGE._lego.filter.SHEMA.index.papers')
@endpush

@include('zADMIN.PAGE._lego.filter._lego.filter_for_table.index')

@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => null])
            @component('zADMIN._wrap.Table.index', ['css'=> '-papers'])
                @foreach($papers as $paper)     
                    {{-- @include('zADMIN.combine.Teaser.lib.seo', ['Var' => $paper]) --}}
                    @include('zADMIN._repo.teaser.seo', ['Var' => $paper])
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $papers])
        @endcomponent
    @endcomponent

@endsection
