@foreach($Items as $_item)
	@continue($_item->id == ($currentId ?? null))
	<option class="x-{{$_item->id}}" value="{{$_item->id}}"{{ is_array($arr) && in_array($_item->id, $arr) ? ' selected' : ''}}{{$_item->id == old('item_id') ? ' selected' : ''}} schema-teaser='{{$_item->schema_teaser}}'>
		{{$_item->name}} <span class="ghost">____</span>[{{$_item->id}} / {{$_item->tag->name ?? ''}} / {{$_item->category->name ?? ''}} ]
	</option>
@endforeach