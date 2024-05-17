@extends('zADMIN._shema.zPlura')

@section('title')данные профиля: {{$face->id}} @endsection

@push('addBread')
	<li>
		<span>
			<span class="content-xs">Plura</span>
		</span>
	</li>
	<li>
		<span>
			<span class="content-xs">Face</span>
		</span>
	</li>
@endpush



@section('content')

<div class="flex HWin">
	<div class="fewfwefw / -Black">

		<div class="Bee"></div>
		<div class="Wings">
			<div class="_win -t">
				<div class="h2 b600 c-h">ПРОФИЛЬ</div>
			</div>
		</div>
		<div class="paragraph"></div>


		@component('_Wrap.Plura.menu')
			@slot('menu_1', 'Личные данные')
			@slot('menu_2', 'Контакты')
			@slot('menu_3', 'размеры: Пиджак')
			@slot('menu_4', 'размеры: Брюки')
			@slot('menu_5', 'размеры: Сорочка')
			@slot('menu_6', 'размеры: Трикотаж')
			@slot('menu_7', 'размеры: Джинсы')
			@slot('menu_8', 'размеры: Обувь')
		@endcomponent





	</div>
	<div class="qwqwqwwe / W-100 space-m">

		
		@component('_Wrap.Plura.tabs')
 		
		@endcomponent

	</div>
</div>


<style>
	#Top {
		background: #000;
	}
	.Design.x-Admin.asideClose .oiBar ._wrap > ._main {
		background: #000;
	}
	#oiBar {
		background: linear-gradient(to right, transparent, #0162fd);
	}
	.fewfwefw {
		padding-left: 2vw;
		width: 25vw;
		background: #0162fd;
		/* margin-top: 1rem; */
		border-radius: 0 1rem 1rem 0;
	}

	.qwqwqwwe {
		background: #111111;
		/* margin-top: 1rem; */
		border-radius: 1rem;
	}
</style>


@endsection