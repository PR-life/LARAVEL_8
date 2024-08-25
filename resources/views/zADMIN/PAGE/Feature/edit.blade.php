@extends('zADMIN._schema.edit')

@section('title')edit. Feature - {{$feature->name}} @endsection


@push('addBread')
	<li>
		<span>
			<span class="content-xs">Контент</span>
		</span>
	</li>
	<li>
		<span>
			<span class="content-xs">Св-ва</span>
		</span>
	</li>
@endpush


@section('content')

<div class="I aura">

	@component('zADMIN._wrap.form.edit', ['route' => route('admin.feature.update', $feature->id), 'css' => '-feature'])

		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.feature.index','link_create' => route('admin.feature.create')])


		<div class="_shell / net">
			@include('zADMIN._bd.edit.published',['Var'=> $feature])
		</div>

		@include('zADMIN.PAGE.Feature.lego.edit.lego.Relationships')
		<div class="paragraph"></div>


		@component('_wrap.Flaber.admin.edit')

			@slot('flaber')
				{{-- @include('zADMIN.PAGE.Feature.lego.edit.sms') --}}
			@endslot

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Feature.lego.edit.body')

		@endcomponent


		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection