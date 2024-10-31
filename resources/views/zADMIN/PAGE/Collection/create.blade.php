@extends('zADMIN._schema.edit')

@section('title')New. Collection @endsection
@section('css-body', '-create ')


@push('beeBefore')
<div class="Bee"></div>
@endpush

@section('content')
<div class="I aura">
	@component('zADMIN._wrap.form.create', ['route' => route('admin.collection.store'), 'css' => '-collection'])

		@include('zADMIN._brick.bar.v.create', ['route' => route('admin.collection.index')])


		<div class="_shell _name / vol-Abs">
			<input id="name" type="text" name="name" value="{{old('name')}}" placeholder='.'>
			<label class="Abs" for="name">Collection</label>
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