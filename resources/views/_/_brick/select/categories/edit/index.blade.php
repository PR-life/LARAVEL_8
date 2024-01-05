<?php
	$arr = $Var->categories->pluck('id')->toArray();
?>

 

@foreach($Categories as $category)
	<option value="{{$category->id}}"{{ is_array($arr) && in_array($category->id, $arr) ? ' selected' : ''}}{{$category->id == old('tag_id') ? ' selected' : ''}}>{{$category->name}}</option>

	@foreach($category->childrenCategories as $childCategory)

	<option value="{{$childCategory->id}}" {{ is_array($arr) && in_array($childCategory->id, $arr) ? ' selected' : ''}}{{$childCategory->id == old('tag_id') ? ' selected' : ''}}>
		– {{$childCategory->name}}
	</option>
	@endforeach
@endforeach
