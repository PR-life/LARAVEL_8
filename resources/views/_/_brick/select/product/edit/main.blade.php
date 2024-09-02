<option value=''>--не выбрано--</option>
@foreach($Products as $_product)
	@if(!$_product->product_id)
		<option
		value="{{$_product->id}}"
		{{ $Var == $_product->id ? ' selected' : ''}}
		{{$_product->id == old('product_id') ? ' selected' : ''}}>
			{{$_product->name}}
		</option>
		{{-- @if($_product->childrenItems->count() > 0)
			@foreach($_product->childrenItems as $_childItem)
			<option
				value="{{$_childItem->id}}"
				{{ $Var == $_childItem->id ? ' selected' : ''}}
				{{$_childItem->id == old('item_id') ? ' selected' : ''}}>
				–- {{$_childItem->name}}
			</option>
			@endforeach
		@endif  --}}
	@endif
@endforeach
