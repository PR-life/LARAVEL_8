@foreach($Items as $_item)   
    @include('zADMIN._repo.teaser.seo', ['Var' => $_item])
    
    @if($_item->childrenItems->isNotEmpty())
        <div class="children -lvl_{{ $_level ?? 1 }} / round">
            @include('zADMIN._repo.product-tree', ['Items' => $_item->childrenItems, '_level' => ($_level ?? 1) + 1])
        </div>
    @endif
@endforeach