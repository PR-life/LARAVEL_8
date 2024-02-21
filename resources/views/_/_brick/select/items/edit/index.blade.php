<?php
	$arr = $Var->items->pluck('id')->toArray();
?>


{{-- <option {{!$arr ? 'selected' : '' }}>пусто</option> --}}
{{-- <option class="disabled noEvents content-xs" disabled {{!$arr ? 'selected' : '' }}>связать с Услугой</option> --}}
@foreach($Items as $item)
	<option class="x-{{$item->id}}" value="{{$item->id}}"{{ is_array($arr) && in_array($item->id, $arr) ? ' selected' : ''}}{{$item->id == old('item_id') ? ' selected' : ''}}>{{$item->name}}</option>
@endforeach