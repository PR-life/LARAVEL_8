@foreach($Lego as $_lego)
	@continue($_lego->id == ($currentId ?? null))
	<option class="x-{{$_lego->id}}" value="{{$_lego->id}}"{{ is_array($arr) && in_array($_lego->id, $arr) ? ' selected' : ''}}{{$_lego->id == old('lego_id') ? ' selected' : ''}}>{{$_lego->name}}</option>
@endforeach
 