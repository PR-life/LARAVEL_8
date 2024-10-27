@extends('zADMIN._schema.edit')

@section('title')edit. Collection - {{$collection->name}} @endsection


@section('content')

<div class="I aura">


	@component('zADMIN._wrap.form.edit', ['route' => route('admin.collection.update', $collection->slug), 'css' => '-collection'])


		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.collection.index','link_create' => route('admin.collection.create')])

		<div class="_shell / net">
			@include('zADMIN._bd.edit.category',['Var'=> $collection])
		</div>

		{{-- @include('zADMIN.PAGE.Collection.lego.edit.lego.Relationships') --}}
		<div class="paragraph"></div>


		
		@component('_wrap.Flaber.admin.edit')
			@slot('flaber')
				{{-- @include('zADMIN.PAGE.Category.lego.edit.sms')	 --}}
			@endslot


			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Collection.lego.edit.body')

		@endcomponent


		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection