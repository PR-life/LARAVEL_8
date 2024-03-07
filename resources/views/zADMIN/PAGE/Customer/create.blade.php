@extends('zADMIN._shema.create')

@section('title')New. Персона @endsection


@push('addBread')
<li>
    <a href="{{route('admin.customer.index')}}">
        <span class="content-xs">Клиенты</span>
	</a>
</li>
<li>
    <span>
        <span class="content-xs">Создать</span>
    </span>
</li>
@endpush


@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.create', ['route' => route('admin.customer.store'), 'css' => '-customer'])

		@include('zADMIN._brick.bar.v.create', ['route' => route('admin.customer.index')])


		{{-- <div class="Wings"> --}}
			{{-- <div class="_win -t"> --}}
				{{-- <div class="content">шаг 1</div>				 --}}

				<div class="Font">
					<div class="_h -vw / familyTochka b500">Добавить <br>новый профиль <br>для раздела Клиенты</div>
				</div>
				<div class="hill-s"></div>	

			{{-- </div> --}}
		{{-- </div> --}}




		<div class="wrap-tochka / flex">
			<div class="Bar -w"></div>
			<div>
				<div class="_shell">
					<div class="menu -tile -XS / cloud / net">
		
						@component('zADMIN.PAGE._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
							@slot('name', 'category_id')
							@slot('id', 'save_null')
							@slot('param', null)
							@slot('value', null)
							
							определить <br>позже
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