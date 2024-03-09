@extends('zADMIN._shema.edit')

@section('title')New. User @endsection
@section('css-body', '-create ')


@push('addBread')
<li>
    <span>
        <span class="content-xs">Офис</span>
    </span>
</li>
<li>
    <span>
        <span class="content-xs">новый Пользователь</span>
    </span>
</li>
@endpush

@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.create', ['route' => route('admin.user.store'), 'css' => '-user'])

		@include('zADMIN._brick.bar.v.create', ['route' => route('admin.user.index')])

		
		<div class="_shell _name / vol-Abs">
			<input id="name" type="text" name="name" value="{{old('name')}}" placeholder='.'>
			<label class="Abs" for="name">Имя</label>
			@error('name')
				<div class="Abs / Nameplate -rt">{{$message}}</div>
			@enderror
		</div>
	

		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.create.footer')

	@endcomponent 
</div>


@endsection