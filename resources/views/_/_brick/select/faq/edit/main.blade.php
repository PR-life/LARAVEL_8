<option selected value> -- faq не установлен -- </option>
@foreach($Faqs as $_faq)
	<option value="{{$_faq->id}}" {{ $Var == $_faq->id ? ' selected' : ''}} {{$_faq->id == old('faq_id') ? ' selected' : ''}}>{{$_faq->name}}</option>
@endforeach