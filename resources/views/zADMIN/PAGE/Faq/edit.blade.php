@extends('zADMIN._schema.edit')

@section('title')edit. Faq - {{$faq->name}} @endsection


@push('addBread')
	<li>
		<span>
			<span class="content-xs">Контент</span>
		</span>
	</li>
	<li>
		<span>
			<span class="content-xs">FAQ</span>
		</span>
	</li>
@endpush



@section('content')

<div class="I aura">


	@component('zADMIN._wrap.form.edit', ['route' => route('admin.faq.update', $faq->id), 'css' => '-faq'])
		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.faq.index','link_create' => route('admin.faq.create')])

		<div class="_shell">
			@include('zADMIN._bd.edit.min',['Var'=> $faq])
		</div>

		@include('zADMIN.PAGE.Faq.lego.edit.lego.Relationships')

		
		@component('_wrap.Flaber.admin.edit')

			@slot('flaber')
				{{-- @include('zADMIN.PAGE.Faq.lego.edit.sms')	 --}}
			@endslot
		

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Faq.lego.edit.body')

		@endcomponent




		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection