<select>
	<option class="_first" selected value> -- не выбрано -- </option>
	@foreach($Categories as $category)

	@if(!$category->category_id)
		<option value="{{$category->id}}" {{$category->id == $Var ? ' selected' : ''}}>
			[{{$category->id}}] - {{$category->name}}
		</option>
	@endif
	
	@endforeach
</select>