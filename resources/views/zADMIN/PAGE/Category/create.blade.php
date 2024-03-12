@extends('zADMIN._shema.edit')

@section('title')New. Category @endsection
@section('css-body', '-create ')


@section('content')
<div class="I aura">
	@component('zADMIN.PAGE._wrap.form.create', ['route' => route('admin.category.store'), 'css' => '-category'])

		@include('zADMIN._brick.bar.v.create', ['route' => route('admin.category.index')])


		<div class="_shell _name / vol-Abs">
			<input id="name" type="text" name="name" value="{{old('name')}}" placeholder='.'>
			<label class="Abs" for="name">Имя категории</label>
			@error('name')
				<div class="Abs / Nameplate -rt">{{$message}}</div>
			@enderror
		</div>
		<div class="_shell">
			@include('zADMIN._lego.form.slug.create')
		</div>


		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.create.footer')

	@endcomponent 
</div>


@endsection