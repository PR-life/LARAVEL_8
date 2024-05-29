@extends('zADMIN._shema.edit')

@section('title')New. Paper @endsection
@section('css-body', '-create ')


@push('addBread')
<li>
    <span>
        <span class="content-xs">Контент</span>
    </span>
</li>
<li>
    <span>
        <span class="content-xs">новая Статья</span>
    </span>
</li>
@endpush

@section('content')

<div class="I aura">
	@component('zADMIN._wrap.form.create', ['route' => route(strtolower('admin.' . ($envData['nameRoute'] ?? 'paper') . '.store')), 'css' => '-paper'])

		@include('zADMIN._brick.bar.v.create', ['route' => route(strtolower('admin.' . ($envData['nameRoute'] ?? 'paper') . '.index'))])


		<input type="hidden" name="user_id" value="{{auth()->user()->id}}">
		<input type="hidden" name="published" value="1">
		
		<div class="_shell _name / vol-Abs">
			<input id="name" type="text" name="name" value="{{old('name')}}" placeholder='.'>
			<label class="Abs" for="name">Название статьи</label>
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