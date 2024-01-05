@extends('zADMIN._shema.edit')

@section('title')New. Faq @endsection
@section('css-body', '-create ')



@push('topAfter')
    {{-- @include('zADMIN.PAGE._lego.filter.btnVol') --}}
    {{-- @include('zADMIN._lego.Bee.nameIndex',['name' => 'Теги. Создать', 'ico' => 'barMenu_relations']) --}}
@endpush


@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.create', ['route' => route('admin.faq.store'), 'css' => '-faq'])

		@include('zADMIN._brick.bar.v.create', ['route' => route('admin.faq.index')])


		<div class="_shell _name / vol-Abs">
			<input id="name" type="text" name="name" value="{{old('name')}}" placeholder='.'>
			<label class="Abs" for="name">Заголовок</label>
			@error('name')
				<div class="Abs / Nameplate -rt">{{$message}}</div>
			@enderror
		</div>
		

		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.create.footer')

	@endcomponent 
</div>


@endsection