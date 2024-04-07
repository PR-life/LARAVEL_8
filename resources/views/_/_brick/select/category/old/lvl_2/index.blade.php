<select>
	<option class="_first" selected value> -- не выбрано -- </option>
	@foreach($categories as $category)
		@foreach($category->childrenCategories as $childCategory)
		<option value="{{$childCategory->id}}" {{$childCategory->id == $Var ? ' selected' : ''}}>
			[{{$childCategory->category->id}} - {{$childCategory->id}}] {{$childCategory->name}}
		</option>
		@endforeach
	@endforeach
</select>