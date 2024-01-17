@extends('zADMIN._shema.edit')

@section('title')New. Item @endsection
@section('css-body', '-create ')


@push('addBread')
<li>
    <span>
        <span class="content-xs">Контент</span>
    </span>
</li>
<li>
    <span>
        <span class="content-xs">новый Item</span>
    </span>
</li>
@endpush

@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.create', ['route' => route('admin.item.store'), 'css' => '-item'])

		@include('zADMIN._brick.bar.v.create', ['route' => route('admin.item.index')])


		<div class="_shell _name / vol-Abs">
			<input id="name" type="text" name="name" value="{{old('name')}}" placeholder='.'>
			<label class="Abs" for="name">Название item</label>
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