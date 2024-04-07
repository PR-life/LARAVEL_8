<select class="Min -w3" name="category_id">
	<option selected value> -- без категории -- </option>
	@foreach($Categories as $category)
	<option value="{{$category->id}}" {{$category->id == $Var->category_id ? ' selected' : ''}}>
		{{$category->name}}
	</option>
	@endforeach
</select>