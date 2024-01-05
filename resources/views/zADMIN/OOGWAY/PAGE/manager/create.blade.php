@extends('zADMIN._shema.index')

@section('title')new Oogway @endsection


@prepend('addBread')
    <li><a class="content-xs" href="{{route('admin.oogway.morda')}}">Oogway</a></li>
	<li><a class="content-xs" href="{{route('admin.oogway.manager.index')}}">Настройка</a></li>
    <li><span class="content-xs">новый Контейнер</span></li>
@endprepend



@section('content')

<div class="I aura">

	<div class="Bee"></div>


	@component('zADMIN.PAGE._wrap.form.edit', ['route' => route('admin.oogway.manager.store')])

		{{-- @include('zADMIN._brick.bar.v.edit', ['route' => route('admin.sms.index')]) --}}


		<div class="_shell">
			{{-- @include('zADMIN._bd.edit.sms',['Var'=> $sms]) --}}
		</div>


		<div class="_shell _name / vol-Abs">
			<input id="name" type="text" name="name" value="{{old('name')}}" placeholder='.'>
			<label class="Abs" for="name">новый Oogway</label>
			@error('name')
				<div class="Abs / Nameplate -rt">{{$message}}</div>
			@enderror
		</div>



		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection