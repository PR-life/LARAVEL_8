<form {!!isset($id) ? "id=\"$id\"" : ''!!} class="{{$css ?? 'Form'}}" method="POST" action="{{route($route ?? 'sms.store')}}" enctype="multipart/form-data">
@csrf
@include('component.Form.spam')
{{-- @include('component.Form.start') --}}

	@include('component.Form._inc.name',['label' => 'Введите имя<b></b>'])
	<div class="paragraph"></div>
	{{-- @include('component.Form._inc.email') --}}
	@include('component.Form._inc.phone',['label' => 'Введите телефон <b></b><sup>*</sup>'])
	{{-- @include('component.Form._inc.country') --}}
	{{-- @include('component.Form._inc.city') --}}

	{{-- <textarea id="sms" name="sms" maxlength="850" rows="5" placeholder="Текст...">{{old('message')}}</textarea> --}}

	<div class="paragraphX2"></div>
	<div class="_footer">
		<button class="-Btn Btn cC -S slim / round-s">
			<span class="_x / content-s">отправить</span>
			<span class="none">Ошибка! Проверьте данные</span>
		</button>
	</div>

	@include('component.Form._brick.Agree')
	 
</form>

<div>
	<a id="smsError" class="Anchor"></a>
</div>

@if ($errors->any())
	<script>
		const element = document.getElementById('smsError')
		const topPos = element.getBoundingClientRect().top + window.pageYOffset

		window.scrollTo({
			top: topPos,
			behavior: 'smooth'
		})
	</script>
@endif
@push('Milk')
	@component('_.component.Message', ['class' => Session::has('success')])
		@slot('heading')
			Отправлено!
		@endslot
		<div class="text">
			<p>Отвечаем на вопросы в рабочие дни, <b>10:00–18:00</b></p>
		</div>
		<div class="paragraph"></div>
		<div class="content">
			<p><span class="Grey">С уважением, <br>компания 55555</span></p>
		</div>
	@endcomponent
@endpush


{{-- @if ($errors->has('name')) --}}
{{-- @error('name') --}}
{{-- <div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div> --}}
{{-- @enderror --}}
{{-- @endif --}}