<select class="Min -w3" name="group_id">
	<option selected value> -- без группы -- </option>
	@foreach($groups as $group)
	<option value="{{$group->id}}" {{$group->id == $Var ? ' selected' : ''}}>
		{{$group->name}}
	</option>
	@endforeach
</select>