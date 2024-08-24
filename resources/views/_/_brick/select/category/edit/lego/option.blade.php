<option
    value="{{ $_category->id }}"
    data-css='group-{{ $_category->group->sku ?? 'none' }}'
    {{ $Var == $_category->id ? ' selected' : ''}}
    {{ $_category->id == old('category_id') ? ' selected' : '' }}>
    {{ $prefix ?? '' }} {{ $_category->name }} {{ $_category->group ? '[ '.$_category->group->name.' ]' : '' }}
</option>