@extends('zADMIN._schema.index')

@section('title')Статьи @endsection

@push('addBread')
    <li>
        <span>
            <span class="content-xs">Контент</span>
        </span>
    </li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => $envData['name_28051841'] ?? 'Paper', 'add' => route(strtolower('admin.' . ($envData['nameRoute'] ?? 'paper') . '.create')), 'Model' => 'Paper'])
    @include('zADMIN.PAGE._lego.filter.SHEMA.index.papers',['Model' => $envData['Model'] ?? 'Paper', 'model' => strtolower($envData['Model']) ?? 'paper'])
@endpush

@include('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['Model' => $envData['Model'] ?? 'Paper', 'model' => strtolower($envData['Model']) ?? 'paper'])

@section('content')

    @component('zADMIN._wrap.index', ['css' => 'relative'])

        @component('zADMIN._wrap.max', ['css' => 'index'])

            @component('zADMIN._wrap.Table.index', ['css'=> '-papers', 'Model' => 'Paper'])
                @foreach($papers as $paper)
                    @include('zADMIN._repo.teaser.seo', ['Var' => $paper])
                @endforeach
            @endcomponent

            @if(isset($categoryPivotServices))
            <h1>Pivotu</h1>
                @component('zADMIN._wrap.Table.index', ['css'=> '-papers', 'Model' => 'Paper'])
                    @foreach($categoryPivotServices as $paper)     
                        @include('zADMIN._repo.teaser.seo', ['Var' => $paper])
                    @endforeach
                @endcomponent
            @endif



            @include('zADMIN.mod.paginator', ['Var' => $papers])
        @endcomponent
    @endcomponent

@endsection
