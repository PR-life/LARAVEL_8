<?
	$id_form_ask = $id_form_ask ?? null;
?>

<form id="{{$id_form_ask ?? 'form_ask'}}" class="Form {{$css07110929 ?? ''}}" method="POST" action="{{route($route ?? 'sms.storeask')}}" enctype="multipart/form-data">
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
	const element = document.getElementById('form_ask')
	const topPos = element.getBoundingClientRect().top + window.pageYOffset - 80

	window.scrollTo({
		top: topPos,
		behavior: 'smooth'
	})
</script>
@endpush
@endif