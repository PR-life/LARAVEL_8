@foreach($Faqs as $_faq)
	@continue($_faq->id == ($currentId ?? null))
	<option class="x-{{$_faq->id}}" value="{{$_faq->id}}"{{ is_array($arr) && in_array($_faq->id, $arr) ? ' selected' : ''}}{{$_faq->id == old('faq_id') ? ' selected' : ''}}>{{$_faq->name}}</option>
@endforeach
 