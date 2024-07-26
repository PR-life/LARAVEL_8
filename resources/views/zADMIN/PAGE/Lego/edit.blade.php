@extends('zADMIN._schema.edit')

@section('title')edit. Lego - {{$lego->name}} @endsection


@push('addBread')
	<li>
		<span>
			<span class="content-xs">Контент</span>
		</span>
	</li>
	<li>
		<span>
			<span class="content-xs">Lego</span>
		</span>
	</li>
@endpush



@section('content')

<div class="I aura">


	@component('zADMIN._wrap.form.edit', ['route' => route('admin.lego.update', $lego->id), 'css' => '-lego'])
		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.lego.index','link_create' => route('admin.lego.create')])

		<div class="_shell">
			@include('zADMIN._bd.edit.min',['Var'=> $lego])
		</div>

		@include('zADMIN.PAGE.Lego.lego.edit.lego.Relationships')

		
		@component('_wrap.Flaber.admin.edit')

			@slot('flaber')
				@include('zADMIN.PAGE.Lego.lego.edit.sms')	
			@endslot
		

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Lego.lego.edit.body')

		@endcomponent




		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection