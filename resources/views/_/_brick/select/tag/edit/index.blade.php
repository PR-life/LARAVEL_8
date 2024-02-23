<?php
	// $arr = $Var->tags->pluck('id')->toArray();
?>

<option selected value> -- тег не установлен -- </option>
@foreach($Tags as $_tag)
	<option class="x-{{$_tag->id}}" value="{{$_tag->id}}"{{ $Var == $_tag->id ? ' selected' : ''}}{{$_tag->id == old('tag_id') ? ' selected' : ''}}>{{$_tag->name}}</option>
@endforeach



{{-- @foreach($Tags as $tag)
	<option value="{{$tag->id}}" 
		{{ $Var ==  $tag->id ? ' selected' : ''}}
		{{$tag->id == old('tag_id') ? ' selected' : ''}}

		>{{$tag->name}}</option>
@endforeach --}}