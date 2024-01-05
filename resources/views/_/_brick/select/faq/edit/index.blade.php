<?php
	$arr = $Var->pivotItem->pluck('id')->toArray();
?>

@foreach($Faqs as $faq)
	<option value="{{$faq->id}}"{{ is_array($arr) && in_array($faq->id, $arr) ? ' selected' : ''}}{{$faq->id == old('faq_id') ? ' selected' : ''}}>{{$faq->name}}</option>
@endforeach