<?php
	isset($Form) ? '' : $Form = 'Manager';
?>

<form id="form_Manager" class="Form -L -shadow / Start" method="POST" action="{{route('sms.update')}}" enctype="multipart/form-data">
	@csrf
	<input id="title" class="none" type="text" name="title" value="." placeholder='.'>
	<input id="id_sms" class="none" type="text" name="id_sms" value="{{session('id_sms') ?? ''}}" placeholder='.'>
	<input id="lang_sms" class="none" type="text" name="lang_sms" value="{{session('lang_sms') ?? 'ru'}}" placeholder='.'>

	<div class="center-text / fade start-fade scene-3">
		<div class="inline / start-joltLeft scene-2">
			<ul class="menu -tag -dark / Kite kite-space kite-round / pointer" data-click data-switch data-package='tabForm' data-stop>
				<li class="active" data-item='1' data-packagetype='css' data-packagefoo='radio' package='Tabs -x1' li-type='email'><span class="a nowrap noEvents">email</span></li>
				<li data-item='2' data-packagetype='css' data-packagefoo='radio' package='Tabs -x2' li-type='phone'><span class="a nowrap noEvents">телефон</span></li>
				<li data-item='3' data-packagetype='css' data-packagefoo='radio' package='Tabs -x3' li-type='whatsapp'><span class="a nowrap noEvents">whatsapp</span></li>
				<li data-item='4' data-packagetype='css' data-packagefoo='radio' package='Tabs -x4' li-type='telegram'><span class="a nowrap noEvents">telegram</span></li>
				<li data-item='5' data-packagetype='css' data-packagefoo='radio' package='Tabs -x5' li-type='viber'><span class="a nowrap noEvents">viber</span></li>
			</ul>
		</div>
	</div>

	<div class="paragraph"></div>

	<div id="tabForm" class="Tabs -x1">
		<div class="_shell / _tab x1">
			@include('component.Form._inc.email')
		</div>
		<div class="_shell / _tab x2">
			@include('component.Form._inc.phone', ['placeholder' => 'менеджер перезвонит на...'])
		</div>
		<div class="_shell / _tab x3">
			@include('component.Form._inc.whatsapp')
		</div>
		<div class="_shell / _tab x4">
			@include('component.Form._inc.telegram')
		</div>
		<div class="_shell / _tab x5">
			@include('component.Form._inc.viber')
		</div>
	</div>

	<div class="paragraphX2"></div>

	<div class="center-text">
		<div class="inline">
			<button class="Btn cC / round-s">
				<span class="_x">отправить</span>
				<span class="none">ошибка! укажите нужный контакт</span>
			</button>
		</div>
	</div>

</form>


@include('component.Form._js.manager',[
		'Form' => 'form_Manager',
		'inputEmail' => 'inputEmail_Manager',
		'inputEmail' => 'inputPhone_Manager',
		'inputWhatsapp' => 'inputWhatsapp_Manager',
		'inputTelegram' => 'inputTelegram_Manager',
		'inputViber' => 'inputViber_Manager',
	])


{{-- @if ($errors->any())
	<script>
		const element = document.getElementById('scrolSmsError')
		const topPos = element.getBoundingClientRect().top + window.pageYOffset

		window.scrollTo({
			top: topPos,
			behavior: 'smooth'
		})
	</script>
@endif --}}


{{-- 
@if (session('UpdateController'))
@push('Milk')
	@component('_.component.Message', ['class' => 'On noEvents'])
		@slot('cssSms')
		-blue -bottom Success
		@endslot
		@slot('heading')
			Отправлено!
		@endslot
		<div class="content Grey">
			<p>Отвечаем на вопросы:<sup>*</sup></p>
			<div class="paragraph-s"></div>
			<p>- рабочие дни, <span class="b600">08:00–19:00</span><br></p>
			<p>- суббота, <span class="b600">08:00–18:00</span></p>
			<div class="paragraph"></div>
			<div class="content-s">*по московскому времени</div>
		</div>
	@endcomponent
@endpush
@endif --}}