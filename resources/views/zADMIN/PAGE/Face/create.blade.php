@extends('zADMIN._shema.create')

@section('title')New. Профиль @endsection


@push('addBread')
	<li>
		<a href="{{route('admin.crm.customer.index')}}">
			<span class="content-xs">Профили</span>
		</a>
	</li>
	<li>
		<span>
			<span class="content-xs">Создать</span>
		</span>
	</li>
@endpush


@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.create', ['route' => route('admin.crm.face.store'), 'css' => '-face'])

		@include('zADMIN._brick.bar.v.create', ['route' => route('admin.crm.face.index')])

		<div class="Font">
			<div class="_h -vw / familyTochka b500">Добавить <br>новый профиль</div>
		</div>
		<div class="hill-s"></div>	
 
		@component('_wrap.step.Tochka.index')
			@component('_wrap.step.Tochka.line')
				@slot('step', '1')
				<div class="content b600">шаг 1</div>
				<div class="paragraph"></div>
				<div class="content">content</div>
			@endcomponent
		@endcomponent

		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.create.footer')

	@endcomponent 
</div>


@endsection