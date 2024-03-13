<div class="Select">
	<select class="Min -w3" name="category_id">
		<option class="default" selected value> -- категория -- </option>
		@foreach($Var as $category)
		@if(!$category->category_id)
		<option class="category-{{$category->category_id}}" value="{{$category->id}}" {{$category->id == ($_GET["category_id"] ?? null) ? ' selected' : ''}}>
			{{$category->name}}
		</option>
			@foreach($category->childrenCategories as $childCategory)
			<option value="{{$childCategory->id}}" {{$childCategory->id == ($_GET["category_id"] ?? null) ? ' selected' : ''}}>
				- {{$childCategory->name}}
			</option>
			@endforeach
		@endif
		@endforeach
	</select>
</div>

