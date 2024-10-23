@extends('zADMIN._schema.edit')

@section('title')edit. Product - {{$product->name}} @endsection

@push('addBread')
	<li>
		<span>
			<span class="content-xs">Контент</span>
		</span>
	</li>
	<li>
		<span>
			<span class="content-xs">Товар</span>
		</span>
	</li>
@endpush


@section('content')

<div class="I aura">
	@component('zADMIN._wrap.form.edit', ['route' => route('admin.product.update', $product->id), 'css' => '-product'])

		@include('zADMIN._brick.bar.v.edit',['routeName' => strtolower('admin.' . ($envData['nameRoute'] ?? 'product') . '.index'),'link_create' => route(strtolower('admin.' . ($envData['nameRoute'] ?? 'product') . '.create'))])

		<div class="_shell / net">
			@include('zADMIN._bd.edit.min',['Var'=> $product])
		</div>


		@include('zADMIN.PAGE.Product.lego.edit.lego.Relationships')
		<div class="paragraph"></div>
 
		@component('_wrap.Flaber.admin.edit')
			@slot('flaber')
				@include('zADMIN.PAGE.Product.lego.edit.sms')	
			@endslot
			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Product.lego.edit.body')
		@endcomponent



		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')
	@endcomponent 
</div>


@endsection