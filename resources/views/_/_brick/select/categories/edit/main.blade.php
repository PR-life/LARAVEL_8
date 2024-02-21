

{{-- <option>--не выбрано--</option> --}}

@foreach($Categories as $category)



	<option
		value="{{$category->id}}"
		{{ $Var->category_id == $category->id ? ' selected' : ''}}
		{{-- {{ is_array($arr) && in_array($category->id, $arr) ? ' selected' : ''}} --}}
		{{$category->id == old('category_id') ? ' selected' : ''}}>

		{{$category->name}} [{{$category->id}}]
	</option>

	@foreach($category->childrenCategories as $childCategory)

	<option
		value="{{$childCategory->id}}"
		{{ $Var->category_id == $childCategory->id ? ' selected' : ''}}
		{{-- {{ is_array($arr) && in_array($category->id, $arr) ? ' selected' : ''}} --}}
		{{$childCategory->id == old('category_id') ? ' selected' : ''}}>
		–- {{$childCategory->name}} [{{$category->id}}]
	</option>
	@endforeach

 
 



@endforeach
