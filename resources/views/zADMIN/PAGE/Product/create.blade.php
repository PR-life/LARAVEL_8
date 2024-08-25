@extends('zADMIN._schema.edit')

@section('title')New. Product @endsection
@section('css-body', '-create ')


@push('addBread')
<li>
    <span>
        <span class="content-xs">Контент</span>
    </span>
</li>
<li>
    <span>
        <span class="content-xs">новый Product</span>
    </span>
</li>
@endpush

@section('content')

<div class="I aura">


	@component('zADMIN._wrap.form.create', ['route' => route('admin.product.store'), 'css' => '-product'])

		@include('zADMIN._brick.bar.v.create', ['route' => route('admin.product.index')])

		
		<div class="_shell _name / vol-Abs">
			<input id="name" type="text" name="name" value="{{old('name')}}" placeholder='.'>
			<label class="Abs" for="name">Имя</label>
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