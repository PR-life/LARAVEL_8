@extends('zADMIN._shema.edit')

@section('title')edit. Sms - {{$sms->name}} @endsection

@push('addBread')
	<li>
		<a href="{{route('admin.sms.index')}}">
			<span class="content-xs">Контент</span>
		</a>
	</li>
	<li>
		<span>
			<span class="content-xs">Sms</span>
		</span>
	</li>
@endpush

@section('content')

<div class="I aura">
	@component('zADMIN._wrap.form.edit', ['route' => route('admin.sms.update', $sms->id), 'css' => '-sms'])

		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.sms.index'])

		<div class="_shell / net">
			@include('zADMIN._bd.edit.sms',['Var'=> $sms])
		</div>

		@include('zADMIN.PAGE.Sms.lego.edit.lego.Relationships')
		<div class="paragraph"></div>

		@component('zADMIN._wrap.Flaber.edit')

			@slot('flaber')
				@include('zADMIN.PAGE.Sms.lego.edit.sms')	
			@endslot

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Sms.lego.edit.body')

		@endcomponent

		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>
@endsection