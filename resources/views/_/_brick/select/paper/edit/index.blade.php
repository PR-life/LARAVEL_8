<option value=''>--не выбрано--</option>
@foreach($Papers as $_paper)
	<option
		value="{{$_paper->id}}"
		{{ $Var == $_paper->id ? ' selected' : ''}}
		{{$_paper->id == old($name ?? 'paper_id') ? ' selected' : ''}}>
			{{$_paper->name}}
	</option>
@endforeach
