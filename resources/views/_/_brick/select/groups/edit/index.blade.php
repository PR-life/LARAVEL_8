<?php
	// $arr = $Var->tags->pluck('id')->toArray();
?>

<option selected value> -- без группы -- </option>
@foreach($Groups as $_group)
	<option class="x-{{$_group->id}}" value="{{$_group->id}}"{{ $Var == $_group->id ? ' selected' : ''}}{{$_group->id == old('group_id') ? ' selected' : ''}}>{{$_group->name}}</option>
@endforeach