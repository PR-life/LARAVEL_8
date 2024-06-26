@extends('zADMIN._schema.edit')

@section('title')edit. Category - {{$category->name}} @endsection


@push('addBread')
	<li>
		<span>
			<span class="content-xs">Контент</span>
		</span>
	</li>
	<li>
		<a href="{{route('admin.category.index')}}">
			<span class="content-xs">Категории</span>
		</a>
	</li>
@endpush



@section('content')

<div class="I aura">


	@component('zADMIN._wrap.form.edit', ['route' => route('admin.category.update', $category->id), 'css' => '-category'])


		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.category.index','link_create' => route('admin.category.create')])

		<div class="_shell / net">
			@include('zADMIN._bd.edit.category',['Var'=> $category])
		</div>

		@include('zADMIN.PAGE.Category.lego.edit.lego.Relationships')
		<div class="paragraph"></div>


		
		@component('_wrap.Flaber.admin.edit')
			@slot('flaber')
				@include('zADMIN.PAGE.Category.lego.edit.sms')	
			@endslot


			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Category.lego.edit.body')

		@endcomponent


		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection