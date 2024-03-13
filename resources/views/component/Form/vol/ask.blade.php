@component('component.Form._wrap.index',['css' => 'Form -space bg round ' . $css ?? ''])

	@slot('id', 'formContact')
	@slot('route', route('sms.ask'))
	{{-- <input type="hidden" name="lang" value="{{app()->getLocale()}}"> --}}


	<div class="space">
		{!!$slot!!}
		<div class="_shell">
			<textarea id="textareaSms_Contact" class="round" name="ask" maxlength="850" rows="12" placeholder="{{__('/_const/form.text')}}...">{{old('message')}}</textarea>
			<div class="x-Error"></div>
		</div>
	</div>

	<div class="_footer / space round-s">
		<button class="Btn {{$cssBtn ?? 'cC -S slim vol-white / round-s'}}">
			<span class="_x flex">
				<svg class="Ico -S / mr-2" viewBox="0 0 24 24" fill="currentColor"><path d="M5.57 20.292a.87.87 0 001.295.757l14.741-8.292a.87.87 0 000-1.515L6.866 2.95a.87.87 0 00-1.296.758v2.464l5.157 1.516a.65.65 0 11-.367 1.248L3.85 7.02a.76.76 0 00-.91 1.028l1.403 3.301h8.832a.65.65 0 110 1.3H4.343L2.94 15.951a.76.76 0 00.89 1.034l6.53-1.92a.65.65 0 01.367 1.247L5.57 17.828v2.464z"></path></svg>
				<span class="content-s">
					{{__('/_const/form.send')}}
				</span>
			</span>
			<span class="none">{{__('/_const/form.errorSend')}}</span>
		</button>
	</div>
@endcomponent



{{-- <form class="Form -space -L {{$css ?? 'bg round'}}" method="POST" action="{{route('sms.ask')}}" enctype="multipart/form-data"> --}}
	{{-- @csrf
	<input class="none" type="text" name="from_page" value="{{url()->current()}}" placeholder='.'>

	<div class="space">
		{!!$slot!!}
		<textarea id="ask" class="round-s" name="ask" maxlength="850" rows="5" placeholder="Текст...">{{old('message')}}</textarea>
	</div>
	<div class="hill"></div>

	<div class="_footer / space round-s">
		<button class="Btn cC -S slim / round-s">
			<span class="_x / content-s">отправить</span>
			<span class="none">Ошибка! Проверьте данные</span>
		</button>
	</div> --}}



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
{{-- </form> --}}



{{-- @if ($errors->newAsk->any()) --}}
	{{-- <script>
		const element = document.getElementById('scrolSmsError')
		const topPos = element.getBoundingClientRect().top + window.pageYOffset

		window.scrollTo({
			top: topPos,
			behavior: 'smooth'
		})
	</script> --}}
{{-- @endif --}}




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