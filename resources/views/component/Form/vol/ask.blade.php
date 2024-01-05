<form class="Form -L -transparent vol-2" method="POST" action="{{route('sms.ask')}}" enctype="multipart/form-data">
	@csrf
	<input class="none" type="text" name="from_page" value="{{url()->current()}}" placeholder='.'>



	<textarea id="sms" name="sms" maxlength="850" rows="5" placeholder="Текст...">{{old('message')}}</textarea>
	<div class="content center-text">
		<input id="inputTitle" type="text" name="title">
	</div>
	<div class="hill"></div>
	<button class="Btn cC">отправить</button>


	{{-- <div class="_shell -label">
		<input id="name" class="-an @error('name') Error @enderror" type="text" name="name" value="{{old('name')}}" placeholder='.'>
		<label class="Abs Grey" for="name">Имя<sup>*</sup></label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div> --}}

	
	{{-- <div class="Grid_PC x2 -gap">
		<div class="_shell -label">
			<input id="email" class="-an @error('email') Error @enderror" type="text" name="email" value="{{old('email')}}" placeholder='.'>
			<label class="Abs Grey" for="email">email<sup>*</sup></label>
			@error('email')
				<div class="Abs / Nameplate -rt">{{ $errors->first('email') }}</div>
			@enderror
		</div>
		<div class="_shell -label">
			<input id="phone" class="-an" type="tel" name="phone" value="{{old('phone')}}" placeholder='.'>
			<label class="Abs Grey" for="email">телефон</label>
		</div>
	</div> --}}


	{{-- <div class="Grid x2 -gap">
		<div class="_shell -label">
			<input id="country" class="-an" type="text" name="country" value="{{old('country')}}" placeholder='.'>
			<label class="Abs Grey" for="country">Страна<sup>*</sup></label>
			@if ($errors->has('country'))
				<div class="Abs / Nameplate -rt">{{ $errors->first('country') }}</div>
			@endif
		</div>
		<div class="_shell -label">
			<input id="city" class="-an" type="text" name="city" value="{{old('city')}}" placeholder='.'>
			<label class="Abs Grey" for="city">Город<sup>*</sup></label>
			@if ($errors->has('city'))
				<div class="Abs / Nameplate -rt">{{ $errors->first('city') }}</div>
			@endif
		</div>
	</div> --}}
 
	{{-- @component('_.gaud.Agree')
		@slot('btnName')
			отправить
		@endslot
		Даю согласие на обработку персональных данных на условиях <a href="/privacy/" class="Grey" target="_blank">Политики конфиденциальности</a>
	@endcomponent --}}
</form>



@if ($errors->newAsk->any())
	{{-- <script>
		const element = document.getElementById('scrolSmsError')
		const topPos = element.getBoundingClientRect().top + window.pageYOffset

		window.scrollTo({
			top: topPos,
			behavior: 'smooth'
		})
	</script> --}}
@endif




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