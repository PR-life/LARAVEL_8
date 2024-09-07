<option value=''>--не выбрано--</option>
@foreach($Products as $_product)
	@if(!$_product->product_id)
		<option
		value="{{$_product->id}}"
		{{ $Var == $_product->id ? ' selected' : ''}}
		{{$_product->id == old('product_surrogate_id') ? ' selected' : ''}}>
			{{$_product->name}}
		</option>
		@if($_product->childrenProducts->count() > 0)
			@foreach($_product->childrenProducts as $_childproduct)
			<option
				value="{{$_childproduct->id}}"
				{{ $Var == $_childproduct->id ? ' selected' : ''}}
				{{$_childproduct->id == old('product_surrogate_id') ? ' selected' : ''}}>
				–- {{$_childproduct->name}}
			</option>
			@endforeach
		@endif 
	@endif
@endforeach
