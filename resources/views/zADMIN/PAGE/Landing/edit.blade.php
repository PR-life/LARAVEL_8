@extends('zADMIN._shema.edit')

@section('title')edit. Landing - {{$landing->name}} @endsection

@push('addBread')
	<li>
		<span>
			<span class="content-xs">Target</span>
		</span>
	</li>
	<li>
		<span>
			<span class="content-xs">Landings</span>
		</span>
	</li>
@endpush



@section('content')

<div class="I aura">
	@component('zADMIN._wrap.form.edit', ['route' => route('admin.landing.update', $landing->id), 'css' => '-landing'])


		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.landing.index'])

		<div class="_shell / net">
			@include('zADMIN._bd.edit.min',['Var'=> $landing])
		</div>

		@include('zADMIN.PAGE.Landing.lego.edit.lego.Relationships')
		<div class="paragraph"></div>
		
		@component('_wrap.Flaber.admin.edit')

			@slot('flaber')
				{{-- @include('zADMIN.PAGE.Landing.lego.edit.sms')	 --}}
			@endslot

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Landing.lego.edit.body')

		@endcomponent

		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>
@endsection