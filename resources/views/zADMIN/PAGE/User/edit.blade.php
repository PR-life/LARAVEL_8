@extends('zADMIN._shema.edit')

@section('title')edit. Пользователь - {{$user->name}} @endsection

@push('addBread')
	<li>
		<span>
			<span class="content-xs">Офис</span>
		</span>
	</li>
	<li>
		<span>
			<span class="content-xs">Пользователи</span>
		</span>
	</li>
@endpush


@section('content')

<div class="I aura">
	@component('zADMIN._wrap.form.edit', ['route' => route('admin.user.update', $user->id), 'css' => '-user'])

		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.user.index'])
		<div class="_shell / net">
			@include('zADMIN._bd.edit.published',['Var'=> $user])
		</div>

		@component('zADMIN._wrap.Flaber.edit')

			@slot('flaber')
				@include('zADMIN.PAGE.User.lego.edit.sms')
			@endslot

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.User.lego.edit.body')

		@endcomponent


		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection