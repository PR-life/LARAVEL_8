<select>
	<option class="_first" selected value> -- не выбрано -- </option>
	@foreach($Faqs as $faq)

	@if(!$faq->faq_id)
		<option value="{{$faq->id}}" {{$faq->id == $Var ? ' selected' : ''}}>
			[{{$faq->id}}] - {{$faq->name}}
		</option>
	@endif
	
	@endforeach
</select>