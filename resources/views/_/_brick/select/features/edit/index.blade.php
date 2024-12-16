@foreach($Features as $_feature)
	<option class="x-{{$_feature->id}}" value="{{$_feature->id}}"{{ is_array($arr) && in_array($_feature->id, $arr) ? ' selected' : ''}}{{$_feature->id == old('feature_id') ? ' selected' : ''}}>{{$_feature->name}}</option>
@endforeach
