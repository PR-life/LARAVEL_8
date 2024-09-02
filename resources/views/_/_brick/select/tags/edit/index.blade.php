<?php
	// $arr = $Var->tags->pluck('id')->toArray();
?>

@foreach($Tags as $_tag)
	<option class="x-{{$_tag->id}}" value="{{$_tag->id}}"{{ is_array($arr) && in_array($_tag->id, $arr) ? ' selected' : ''}}{{$_tag->id == old('tag_id') ? ' selected' : ''}}>{{$_tag->name}}</option>
	{{-- <option value="{{$_tag->id}}"{{ is_array($arr) && in_array($_tag->id, $arr) ? ' selected' : ''}}{{$_tag->id == old('tag_id') ? ' selected' : ''}}>{{$_tag->name}}</option> --}}
@endforeach
 
 
{{-- @foreach($Items as $item) --}}
	{{-- <option class="x-{{$item->id}}" value="{{$item->id}}"{{ is_array($arr) && in_array($item->id, $arr) ? ' selected' : ''}}{{$item->id == old('item_id') ? ' selected' : ''}}>{{$item->name}}</option> --}}
{{-- @endforeach --}}