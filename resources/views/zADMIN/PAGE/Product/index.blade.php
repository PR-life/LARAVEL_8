@extends('zADMIN._schema.index')

@section('title')Product @endsection

@push('addBread')
    <li>
        <span>
            <span class="content-xs">товары</span>
        </span>
    </li>
@endpush

@include('zADMIN.PAGE.Product.lego.index.manager')

@section('content')
    @component('zADMIN.PAGE.Product.wrap.index')
        @foreach($products as $_product)     
        
            @include('zADMIN._repoV2.teaser.seo', [
                'Var' => $_product,
                'css03091324' => $_product->product_id ? ' x-children' : ' x-solo'])

            @if($_product->childrenProducts->isNotEmpty())
                <div class="children -lvl_{{ $_level ?? 1 }} {{$_product->product_id ? ' x-children' : ' x-solo'}} / round">
                    @include('zADMIN._repo.product-tree', ['Products' => $_product->childrenProducts, '_level' => ($_level ?? 1) + 1])
                </div>
            @endif
        @endforeach
    @endcomponent
@endsection
