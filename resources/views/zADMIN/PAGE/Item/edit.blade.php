@extends('zADMIN._shema.edit')

@section('title')edit. Item - {{$item->name}} @endsection

@push('addBread')
	<li>
		<span>
			<span class="content-xs">Контент</span>
		</span>
	</li>
	<li>
		<span>
			<span class="content-xs">Статьи</span>
		</span>
	</li>
@endpush


@section('content')

<div class="I aura">
	@component('zADMIN._wrap.form.edit', ['route' => route('admin.item.update', $item->id), 'css' => '-item'])
		@include('zADMIN._brick.bar.v.edit',['routeName' => strtolower('admin.' . ($envData['nameRoute'] ?? 'item') . '.index'),'link_create' => route(strtolower('admin.' . ($envData['nameRoute'] ?? 'item') . '.create'))])

		<div class="_shell / net">
			@include('zADMIN._bd.edit.min',['Var'=> $item])
		</div>
 
		@include('zADMIN.PAGE.Item.lego.edit.lego.Relationships')
		<div class="paragraph"></div>
 
		@component('_wrap.Flaber.admin.edit')
			@slot('flaber')
				@include('zADMIN.PAGE.Item.lego.edit.sms')	
			@endslot
			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Item.lego.edit.body')
		@endcomponent



		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')
	@endcomponent 
</div>


@endsection