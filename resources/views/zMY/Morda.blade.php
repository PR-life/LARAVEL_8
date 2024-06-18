@extends('_schema.vol-lite')

@section('css-body', '-MY ')


@section('content')

<div id="MY" class="bg / HMinVar">

	@component('zMY._wrap.index', ['css' => 'role-'.auth()->user()->role] )

		<h4>{{__('my/local.my_data')}}</h4>
		@include('zMY._lego.achievement')
		<div class="paragraph / net"></div>
		<h4>Получить статус</h4>
		{{-- 
		 		 
		<div class="space-m round bg-2">
			@include('zMY._lego.add_status')
		</div>
		<div class="paragraph / net"></div>

		<h4>{{__('my/local.subscriptions')}}</h4>
		@include('zMY._lego.subscriptions') --}}
		
	@endcomponent


</div>

 

@endsection