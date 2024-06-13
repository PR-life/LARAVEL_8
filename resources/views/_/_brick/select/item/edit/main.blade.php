<option value=''>--не выбрано--</option>
@foreach($Items as $_item)
	@if(!$_item->item_id)
		<option
		value="{{$_item->id}}"
		{{ $Var == $_item->id ? ' selected' : ''}}
		{{$_item->id == old('item_id') ? ' selected' : ''}}>
			{{$_item->name}}
		</option>
		@if($_item->childrenItems->count() > 0)
			@foreach($_item->childrenItems as $_childItem)
			<option
				value="{{$_childItem->id}}"
				{{ $Var == $_childItem->id ? ' selected' : ''}}
				{{$_childItem->id == old('item_id') ? ' selected' : ''}}>
				–- {{$_childItem->name}}
			</option>
			@endforeach
		@endif 
	@endif
@endforeach
