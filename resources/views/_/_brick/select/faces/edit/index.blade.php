<?php
	$arr = $Var->faces->pluck('id')->toArray();
	// $arr = [];
?>

@foreach($Faces as $_face)
	<option class="x-{{$_face->id}}" value="{{$_face->id}}"{{ is_array($arr) && in_array($_face->id, $arr) ? ' selected' : ''}}{{$_face->id == old('tag_id') ? ' selected' : ''}}>{{$_face->surname}} {{$_face->name}} {{$_face->patronymic}}</option>
	{{-- <option value="{{$_face->id}}"{{ is_array($arr) && in_array($_face->id, $arr) ? ' selected' : ''}}{{$_face->id == old('tag_id') ? ' selected' : ''}}>{{$_face->name}}</option> --}}
@endforeach
 
 
{{-- @foreach($Items as $item) --}}
	{{-- <option class="x-{{$item->id}}" value="{{$item->id}}"{{ is_array($arr) && in_array($item->id, $arr) ? ' selected' : ''}}{{$item->id == old('item_id') ? ' selected' : ''}}>{{$item->name}}</option> --}}
{{-- @endforeach --}}