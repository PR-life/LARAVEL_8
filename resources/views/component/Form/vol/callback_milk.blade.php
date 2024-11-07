<?
	$id_form_callback = $id_form_callback ?? null;
?>

<form id="{{$id_form_callback ?? 'callback_milk'}}" class="Form {{$css07110929 ?? ''}}" method="POST" action="{{route($route ?? 'sms.storecallback')}}" enctype="multipart/form-data">
	@csrf
	
	@include('component.Form.vol.lego.callback')

	<div class="paragraphX2"></div>
	<div class="_footer / flex cC">
		<button class="-Btn Btn cC -auto slim W-100 / round-s">
			<span class="_x / content-s">отправить</span>
			<span class="none">Ошибка! Проверьте данные</span>
		</button>
	</div>
    @include('component.Form._brick.Agree', ['css' => 'center-text space'])
</form>

@if ($errors->newCallBack->any())
@push('js-bottom-solo')
<script>
	document.addEventListener("DOMContentLoaded", () => {
		setTimeout(() => document.getElementById('milk_formCallback').click(), 250);
	});
</script>
@endpush
@endif