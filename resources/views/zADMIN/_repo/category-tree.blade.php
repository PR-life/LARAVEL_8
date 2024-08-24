@foreach($Categories as $_category)   
    @include('zADMIN._repo.teaser.seo', ['Var' => $_category])
    
    @if($_category->childrenCategories->isNotEmpty())
        <div class="children -lvl_{{ $_level ?? 1 }} / round">
            @include('zADMIN._repo.category-tree', ['Categories' => $_category->childrenCategories, '_level' => ($_level ?? 1) + 1])
        </div>
    @endif
@endforeach