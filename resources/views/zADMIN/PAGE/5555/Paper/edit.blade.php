@extends('zADMIN._shema.edit')

@section('title')edit. Paper - {{$paper->name}} @endsection


@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.edit', ['route' => route('admin.paper.update', $paper->id), 'css' => '-paper'])

		{{-- @include('zADMIN._brick.bar.v.edit', ['route' => route('admin.paper.index')]) --}}
		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.paper.index'])


		<div class="_shell">
			@include('zADMIN._bd.edit.min',['Var'=> $paper])
		</div>

		
		@component('zADMIN.PAGE._wrap.Flaber.edit')

			@slot('flaber')

			@endslot

			<div class="paragraphX2"></div>
			{{-- @include('zADMIN.PAGE.Faq._lego.edit.body')	 --}}

		@endcomponent


		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection