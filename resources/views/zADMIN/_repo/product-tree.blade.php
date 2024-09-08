@foreach($Products as $_product)   
    @include('zADMIN._repo.teaser.seo', ['Var' => $_product])
    
    @if($_product->childrenProducts->isNotEmpty())
        <div class="children -lvl_{{ $_level ?? 1 }} / round">
            @include('zADMIN._repo.product-tree', ['Products' => $_product->childrenProducts, '_level' => ($_level ?? 1) + 1])
        </div>
    @endif
@endforeach