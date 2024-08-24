@foreach($Categories as $_category)
    @include('_._brick.select.category.edit.lego.option')

    @if($_category->childrenCategories->count() > 0)
        @include('zADMIN._repo.category-options', ['Categories' => $_category->childrenCategories, 'prefix' => ($prefix ?? '') . '- ', 'Var' => $Var])
    @endif
@endforeach
