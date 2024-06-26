@extends('zADMIN._schema.index')

@section('title')new Task @endsection


@section('content')

<div class="I aura">

	<div class="Bee"></div>


	@component('zADMIN._wrap.form.edit', ['route' => route('admin.oogway.task.store')])

		{{-- @include('zADMIN._brick.bar.v.edit', ['route' => route('admin.sms.index')]) --}}


		<div class="_shell">
			{{-- @include('zADMIN._bd.edit.sms',['Var'=> $sms]) --}}
		</div>


		<div class="_shell _name / vol-Abs">
			<input id="name" type="text" name="name" value="{{old('name')}}" placeholder='.'>
			<label class="Abs" for="name">Название задачи</label>
			@error('name')
				<div class="Abs / Nameplate -rt">{{$message}}</div>
			@enderror
		</div>



		<div class="_shell">
			<div class="content">oogway_id</div>
			<input id="oogway_id" type="text" name="oogway_id" value="1" placeholder='.'>
		</div>



		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection