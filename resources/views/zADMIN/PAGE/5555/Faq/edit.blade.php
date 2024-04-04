@extends('zADMIN._shema.edit')

@section('title')edit. Faq - {{$faq->name}} @endsection


@section('content')

<div class="I aura">


	@component('zADMIN._wrap.form.edit', ['route' => route('admin.faq.update', $faq->id), 'css' => '-faq'])

		{{-- @include('zADMIN._brick.bar.v.edit', ['route' => route('admin.faq.index')]) --}}
		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.faq.index'])


		<div class="_shell">
			@include('zADMIN._bd.edit.min',['Var'=> $faq])
		</div>

		
		@component('zADMIN._wrap.Flaber.edit')

			@slot('flaber')

			@endslot

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Faq.lego.edit.body')	

		@endcomponent


		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection