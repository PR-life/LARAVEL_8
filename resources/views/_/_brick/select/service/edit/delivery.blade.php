<option value=''>--не выбрано--</option>
@foreach($Services as $_service)
	<option
		value="{{$_service->id}}"
		{{ $Var == $_service->id ? ' selected' : ''}}
		{{$_service->id == old('service_delivery_id') ? ' selected' : ''}}>
			{{$_service->name}}
	</option>
@endforeach
