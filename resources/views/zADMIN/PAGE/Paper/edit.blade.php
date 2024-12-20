@extends('zADMIN._schema.edit')

@section('title')edit. Paper - {{$paper->name}} @endsection

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
	@component('zADMIN._wrap.form.edit', ['route' => route(strtolower('admin.' . ($envData['nameRoute'] ?? 'paper') . '.update'),$paper->slug), 'css' => '-paper'])
		@include('zADMIN._brick.bar.v.edit',['routeName' => strtolower('admin.' . ($envData['nameRoute'] ?? 'paper') . '.index'),'link_create' => route(strtolower('admin.' . ($envData['nameRoute'] ?? 'paper') . '.create'))])

		<div class="_shell / net">
			@include('zADMIN._bd.edit.min',['Var'=> $paper])
		</div>

		
		@include('zADMIN.PAGE.Paper.lego.edit.lego.Relationships')

		 
		<div class="paragraph"></div>
 
		@component('_wrap.Flaber.admin.edit')
			@slot('flaber')
				@include('zADMIN.PAGE.Paper.lego.edit.sms')	
			@endslot
			@slot('date')
				@include('zADMIN.PAGE._lego.edit.Flaber.date',['Var'=> $paper])	
			@endslot
			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Paper.lego.edit.body')
		@endcomponent

		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')
	@endcomponent 
</div>
@endsection