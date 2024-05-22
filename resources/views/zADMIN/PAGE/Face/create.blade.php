@extends('zADMIN._shema.create')

@section('title')New. Профиль @endsection
@section('css-body', '-create ')

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


	@component('zADMIN._wrap.form.create', ['route' => route('admin.crm.face.store'), 'css' => '-face'])

		@include('zADMIN._brick.bar.v.create', ['route' => route('admin.crm.face.index')])
		<input type="hidden" name="user_id" value="{{auth()->user()->id}}">

		<div class="Font">
			<div class="_h -vw / familyTochka b500">Добавить <br>новый профиль</div>
		</div>
		<div class="hill-s"></div>	
 
		@component('_wrap.step.Tochka.index')
			@include('zADMIN.PAGE.Face.lego.create.steps')
		@endcomponent

		<div class="hill"></div>
		{{-- @include('zADMIN._lego.form.btn.create.footer') --}}

	@endcomponent 
</div>


@endsection