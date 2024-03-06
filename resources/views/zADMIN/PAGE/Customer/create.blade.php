@extends('zADMIN._shema.edit')

@section('title')New. Персона @endsection
@section('css-body', '-create ')


@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.create', ['route' => route('admin.customer.store'), 'css' => '-customer'])

		@include('zADMIN._brick.bar.v.create', ['route' => route('admin.customer.index')])


		<div class="_shell">
			<div class="menu -tile -XS / cloud / net">

				@component('zADMIN.PAGE._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
					@slot('name', 'category_id')
					@slot('id', 'save_null')
					@slot('param', 'checked')
					@slot('value', null)
					
					не выбран
				@endcomponent

				@foreach($categories as $_category)


					@component('zADMIN.PAGE._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
						@slot('name', 'category_id')
						@slot('id', $_category->id)
						@slot('param', 'checked')
						@slot('value', $_category->id)
						
						{{$_category->name}}
					@endcomponent
				@endforeach
			</div>
		</div>

		
		{{-- <div class="_shell _name / vol-Abs">
			<input id="name" type="text" name="name" value="{{old('name')}}" placeholder='.'>
			<label class="Abs" for="name">Фамилия</label>
			@error('name')
				<div class="Abs / Nameplate -rt">{{$message}}</div>
			@enderror
		</div> --}}
		

		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.create.footer')

	@endcomponent 
</div>


@endsection