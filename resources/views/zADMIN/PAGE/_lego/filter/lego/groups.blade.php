<div class="Select">
	<select class="Min -w3" name="group_id">
		<option class="default" value> -- группа -- </option>
		@foreach($Var as $_group)
		<option class="group-{{$_group->id}}" value="{{$_group->id}}" {{$_group->id == ($_GET["group_id"] ?? null) ? ' selected' : ''}}>
			{{$_group->name}}
		</option>
		@endforeach
	</select>
</div>

