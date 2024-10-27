@foreach($Collections as $_collection)
	<option class="x-{{$_collection->id}}" value="{{$_collection->id}}"{{ is_array($arr) && in_array($_collection->id, $arr) ? ' selected' : ''}}{{$_collection->id == old('collection_id') ? ' selected' : ''}}>{{$_collection->name}}</option>
@endforeach