

<option value=''>--не выбрано--</option>

@foreach($Categories as $category)

 
@if($category->childrenCategories->count() > 0)
	<option
		value="{{$category->id}}"
		{{ $Var == $category->id ? ' selected' : ''}}
		{{-- {{ is_array($arr) && in_array($category->id, $arr) ? ' selected' : ''}} --}}
		{{$category->id == old('category_id') ? ' selected' : ''}}>

		{{$category->name}} [{{$category->id}}]
	</option>

	@foreach($category->childrenCategories as $childCategory)

	<option
		value="{{$childCategory->id}}"
		{{ $Var == $childCategory->id ? ' selected' : ''}}
		{{-- {{ is_array($arr) && in_array($category->id, $arr) ? ' selected' : ''}} --}}
		{{$childCategory->id == old('category_id') ? ' selected' : ''}}>
		–- {{$childCategory->name}} [{{$category->id}}]
	</option>
	@endforeach
@endif
 
 



@endforeach
