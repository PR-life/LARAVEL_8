@extends('zADMIN._schema.edit')

@section('title')edit. Detail - {{$detail->name}} @endsection


@push('addBread')
	<li>
		<span>
			<span class="content-xs">Контент</span>
		</span>
	</li>
	<li>
		<span>
			<span class="content-xs">detail</span>
		</span>
	</li>
@endpush


@section('content')

<div class="I aura">

	@component('zADMIN._wrap.form.edit', ['route' => route('admin.detail.update', $detail->id), 'css' => '-detail'])

		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.detail.index','link_create' => route('admin.detail.create')])


		<div class="_shell / net">
			@include('zADMIN._bd.edit.published',['Var'=> $detail])
		</div>

		@include('zADMIN.PAGE.Detail.lego.edit.lego.Relationships')
		<div class="paragraph"></div>


		@component('_wrap.Flaber.admin.edit')

			@slot('flaber')
				{{-- @include('zADMIN.PAGE.Detail.lego.edit.sms') --}}
			@endslot

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Detail.lego.edit.body')

		@endcomponent


		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection