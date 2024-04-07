<?php
	// $arr = $Var->tags->pluck('id')->toArray();
?>

@foreach($Tags as $tag)
	<option class="x-{{$tag->id}}" value="{{$tag->id}}"{{ is_array($arr) && in_array($tag->id, $arr) ? ' selected' : ''}}{{$tag->id == old('tag_id') ? ' selected' : ''}}>{{$tag->name}}</option>
	{{-- <option value="{{$tag->id}}"{{ is_array($arr) && in_array($tag->id, $arr) ? ' selected' : ''}}{{$tag->id == old('tag_id') ? ' selected' : ''}}>{{$tag->name}}</option> --}}
@endforeach
 
 
{{-- @foreach($Items as $item) --}}
	{{-- <option class="x-{{$item->id}}" value="{{$item->id}}"{{ is_array($arr) && in_array($item->id, $arr) ? ' selected' : ''}}{{$item->id == old('item_id') ? ' selected' : ''}}>{{$item->name}}</option> --}}
{{-- @endforeach --}}