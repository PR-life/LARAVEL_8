<option value=''>-- faq не установлен --</option>
@foreach($Faqs as $_faq)
	@continue($_faq->id == $currentId)

	<option value="{{$_faq->id}}" {{ $Var == $_faq->id ? ' selected' : ''}} {{$_faq->id == old('faq_id') ? ' selected' : ''}}>{{$_faq->name}}</option>
@endforeach