@foreach($Items as $_item)
	@continue($_item->id == ($currentId ?? null))
	<option class="x-{{$_item->id}}" value="{{$_item->id}}"{{ is_array($arr) && in_array($_item->id, $arr) ? ' selected' : ''}}{{$_item->id == old('item_id') ? ' selected' : ''}}>{{$_item->name}}</option>
@endforeach