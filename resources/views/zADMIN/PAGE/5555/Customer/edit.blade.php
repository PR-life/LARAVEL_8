@extends('zADMIN._shema.edit')

@section('title')edit. Customer - {{$customer->name}} @endsection


@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.edit', ['route' => route('admin.crm.customer.update', $customer->id), 'css' => '-customer'])

		{{-- @include('zADMIN._brick.bar.v.edit', ['route' => route('admin.crm.customer.index')]) --}}
		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.crm.customer.index'])


		<div class="_shell">
			{{-- @include('zADMIN._bd.edit.min',['Var'=> $customer]) --}}
		</div>

		
		@component('zADMIN.PAGE._wrap.Flaber.edit')

			@slot('flaber')
				@include('zADMIN.PAGE.Customer.lego.edit.sms')
			@endslot

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Customer.lego.edit.body')	



			<div class="Blog">
				@include('zADMIN.PAGE.Customer.lego.Chat')
			</div>

 




		@endcomponent








		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection