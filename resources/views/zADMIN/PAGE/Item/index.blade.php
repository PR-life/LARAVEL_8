@extends('zADMIN._schema.index')

@section('title')Item @endsection

@push('addBread')
    <li>
        <span>
            <span class="content-xs">Контент</span>
        </span>
    </li>
@endpush

@include('zADMIN.PAGE.Item.lego.index.manager')


@section('content')

@component('zADMIN.PAGE.Item.wrap.index')


    @foreach($items as $_item)
        @include('zADMIN._repoV2.teaser.seo', [
                'Var' => $_item,
                'css03091324' => $_item->item_id ? ' x-children' : ' x-solo'])
        {{-- @include('zADMIN._repo.teaser.xItem', ['Var' => $_item, 'css' => ' parent']) --}}
        {{-- @include('zADMIN._repo.teaser.seo', ['Var' => $_item, 'css' => ' parent']) --}}

        @if($_item->childrenItems->isNotEmpty())
            <div class="children -lvl_{{ $_level ?? 1 }} {{$_item->item_id ? ' x-children' : ' x-solo'}} / round">
                @include('zADMIN._repo.item-tree', ['Items' => $_item->childrenItems, '_level' => ($_level ?? 1) + 1])
            </div>
            {{-- <div class="children -lvl_{{ $_level ?? 1 }} / round">
                @include('zADMIN._repo.xItem-tree', ['items' => $_item->childrenItems, '_level' => ($_level ?? 1) + 1])
            </div> --}}
        @endif
    @endforeach

@endcomponent



    {{-- @component('zADMIN._wrap.index', ['css' => 'relative'])
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-items', 'Model' => 'Item', 'localstoragePicking' => 'filter_btn_table_mockupLink'])

            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $items])
        @endcomponent
    @endcomponent --}}

@endsection
