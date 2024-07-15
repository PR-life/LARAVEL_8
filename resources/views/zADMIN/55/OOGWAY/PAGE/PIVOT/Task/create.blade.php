@extends('zADMIN._schema.INDEX_')

@section('title')new TaskTask @endsection


@section('content')

<div class="I aura">

	<div class="Bee"></div>


	@component('zADMIN._wrap.form.edit', ['route' => route('admin.oogway.pivot.task.store')])

		{{-- @include('zADMIN._brick.bar.v.edit', ['route' => route('admin.sms.index')]) --}}


		<div class="_shell">
			{{-- @include('zADMIN._bd.edit.sms',['Var'=> $sms]) --}}
		</div>

 

		
		<div class="_shell">
			<div class="content">task_id</div>
			<input id="oogway_id" type="text" name="task_id" placeholder='.'>
		</div>

		<div class="_shell">
			<div class="content">tasks_id</div>
			<input id="oogway_id" type="text" name="tasks_id" placeholder='.'>
		</div>



		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection