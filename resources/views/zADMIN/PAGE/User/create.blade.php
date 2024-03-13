@extends('zADMIN._shema.create')

@section('title')New. User @endsection
@section('css-body', '-create ')


@push('addBread')
	<li>
		<span>
			<span class="content-xs">Офис</span>
		</span>
	</li>
	<li>
		<span>
			<span class="content-xs">новый Пользователь</span>
		</span>
	</li>
@endpush

@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.create', ['route' => route('admin.user.store'), 'css' => '-user'])

		@include('zADMIN._brick.bar.v.create', ['route' => route('admin.user.index')])


		<div class="Font">
			<div class="_h -vw / familyTochka b500">Добавить <br>нового пользователя</div>
		</div>
		<div class="hill-s"></div>	


		@component('_wrap.step.Tochka.index')
			@component('_wrap.step.Tochka.line')
				@slot('step', '1')
				<div class="content b600">шаг 1</div>
				<div class="paragraph"></div>
				<div class="content">Статус пользователя</div>
				<div class="paragraph"></div>
				@include('zADMIN.PAGE.User.lego.create.check_role')
				<div class="paragraphX2"></div>
			@endcomponent
			@component('_wrap.step.Tochka.line')
				@slot('step', '2')
				{{-- <div class="content b600">шаг 2</div> --}}
				<div class="paragraph"></div>
				<div class="_shell @error('name') Error @enderror / vol-Abs">
					<input id="inputName" type="text" name="name" value="{{old('name')}}" placeholder=".">
					<label class="Abs" for="inputName">@svg('plus')шаг 2: укажите Имя пользователя</label>
				</div>
				@error('name')
					<div class="content-s / Error -text">{{ $errors->first('name')}}</div>
				@enderror
				<div class="paragraphX2"></div>
			@endcomponent
			@component('_wrap.step.Tochka.line')
				@slot('step', '3')
				{{-- <div class="content b600">шаг 2</div> --}}
				<div class="paragraph"></div>
				<div class="_shell @error('email') Error @enderror / vol-Abs">
					<input id="inputEmail" type="text" name="email" value="{{old('email')}}" placeholder=".">
					<label class="Abs" for="inputEmail">@svg('plus')шаг 2: укажите email пользователя</label>
				</div>
				@error('email')
					<div class="content-s / Error -text">{{ $errors->first('email')}}</div>
				@enderror
				<div class="paragraphX2"></div>
			@endcomponent
			@component('_wrap.step.Tochka.line')
				@slot('step', '4')
				<div class="content b600">шаг 3</div>
				<div class="paragraph"></div>
				<div class="content">Сохранить и продолжить</div>
				<div class="paragraph"></div>
			@endcomponent
		@endcomponent
 
		<div class="paragraph"></div>
		@include('zADMIN._lego.form.btn.create.footer')

	@endcomponent 
</div>


@endsection