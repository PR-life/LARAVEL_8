@foreach($Categories as $_category)
    {{-- @include('_._brick.select.category.edit.lego.option') --}}

    <option class="x-{{$_category->id}}" value="{{$_category->id}}"{{ is_array($arr) && in_array($_category->id, $arr) ? ' selected' : ''}}{{$_category->id == old('category_id') ? ' selected' : ''}}>{{$_category->name}}</option>

    @if($_category->childrenCategories->count() > 0)
        {{-- @include('zADMIN._repo.category-options', ['Categories' => $_category->childrenCategories, 'prefix' => ($prefix ?? '') . '- ', 'Var' => $Var]) --}}
        @include('zADMIN._repo.categories-options', ['Categories' => $_category->childrenCategories, 'prefix' => '- ', 'arr' => $arr])
    @endif
@endforeach
