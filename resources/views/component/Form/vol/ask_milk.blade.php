<?
	$id_form_ask = $id_form_ask ?? null;
?>

<form id="{{$id_form_ask ?? 'form_ask_milk'}}" class="Form {{$css07110929 ?? ''}}" method="POST" action="{{route($route ?? 'sms.storeask')}}" enctype="multipart/form-data">
	@csrf

	@include('component.Form.vol.lego.ask')

	<div class="paragraphX2"></div>
	<div class="_footer / flex cC">
		@include('component.Form._brick.btn.footer')
	</div>
</form>

@if ($errors->newAsk->any())
@push('js-bottom-solo')
<script>
	document.addEventListener("DOMContentLoaded", () => {
		setTimeout(() => document.getElementById('milk_formAsk').click(), 250);
	});
</script>
@endpush
@endif