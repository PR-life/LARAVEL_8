<select class="Min -w3" name="{{$bd_cell_name ?? ''}}">
	<option selected value> -- без категории -- </option>
	@foreach($Categories as $category)
	<option class="parent-{{$category->category_id ?? ''}}" value="{{$category->id}}" {{$category->id == $Var ? ' selected' : ''}}>
		{{$category->name}} ({{$category->id}})
	</option>
	@endforeach
</select>