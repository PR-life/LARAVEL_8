{{-- <option selected value> -- без группы -- </option> --}}
{{-- @foreach($Groups as $_group)
	<option class="x-{{$_group->id}}" value="{{$_group->id}}"{{ $Var == $_group->id ? ' selected' : ''}}{{$_group->id == old('group_id') ? ' selected' : ''}}>{{$_group->name}}</option>
@endforeach --}}


@foreach($Groups as $_group)
	<option value="{{$_group->id}}"{{ is_array($arr) && in_array($_group->id, $arr) ? ' selected' : ''}}{{$_group->id == old('group_id') ? ' selected' : ''}}>{{$_group->name}}</option>
@endforeach
