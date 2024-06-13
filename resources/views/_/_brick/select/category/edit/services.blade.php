<option value=''>--не выбрано--</option>
@foreach($Categories as $_category)
@if(!$_category->category_id)
<option
value="{{$_category->id}}"
{{ $Var == $_category->id ? ' selected' : ''}}
{{$_category->id == old('category_id') ? ' selected' : ''}}>

{{$_category->name}}
</option>
@if($_category->childrenCategories->count() > 0)
@foreach($_category->childrenCategories as $_childCategory)
<option
	value="{{$_childCategory->id}}"
	{{ $Var == $_childCategory->id ? ' selected' : ''}}
	{{$_childCategory->id == old('category_id') ? ' selected' : ''}}>
	–- {{$_childCategory->name}}
</option>
@endforeach
@endif 
@endif
@endforeach
