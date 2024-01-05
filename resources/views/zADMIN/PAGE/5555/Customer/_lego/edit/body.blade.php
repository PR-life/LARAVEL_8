<div class="Article aura">

	<div class="_shell _name @error('name') Error @enderror / vol-Abs / net">
		<input id="inputName" type="text" name="name" value="{{$customer->name ?? old('name')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')Имя</label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div>


	<div class="paragraph"></div>

	<div class="_shell _name / vol-Abs label-insideInput">
		<input type="text" value="+7 985 414-66-69" readonly>
		<label class="Abs" for="inputName">@svg('plus')удобный способ связи</label>
	</div>


</div>


<style>
	.table-1 ._cell {
		padding-top: .5rem;
		padding-bottom: 1rem;
	}

	.table-1 ._1 {
		/* padding-left: .5rem; */
		background: rgba(255,255,255,.1)
	}
	.table-1 ._2 {
		background: rgba(255,255,255,.05)
	}
	.table-1 ._3 {
		padding-left: .5rem;
		background: rgba(255,255,255,.025)
	}

	.table-2 ._row {
		padding-bottom: 1rem;
		margin-bottom: 1rem;
		border-bottom: 1px solid hsla(0, 0%, 100%, 0.15);
	}

	.table-2 ._bg {
		margin-top: 7px;
		background: rgba(255, 255, 255, .025);
	}
</style>
 

<div class="hill-m"></div>
<div class="Article aura">
	<div class="hMin"><span class="b600">Когда были визиты и что купил</span></div>

	<div class="paragraphX2"></div>

	<div class="table-1">
		@component('zADMIN.PAGE.Customer._wrap.table_1')
			@slot('data', '23 март 2021')
			@slot('location', 'ТЦ Гименей')
			{{-- @slot('order', 'заказ: сорочка') --}}
		@endcomponent
		@component('zADMIN.PAGE.Customer._wrap.table_1')
			@slot('data', '03 май 2021')
			@slot('location', 'ТЦ Гименей')
			@slot('order', 'сорочка')
		@endcomponent
		@component('zADMIN.PAGE.Customer._wrap.table_1')
			@slot('data', '07 май 2021')
			@slot('location', 'позвонил сам')
			@slot('order', 'пошив классического мужского пиджака на заказ по индивидуальным меркам')
		@endcomponent
	</div>
</div>

<div class="hill-m"></div>
<div class="Article aura">
	<div class="hMin"><span class="b600">Регулярные взаимодействия</span></div>
	<div class="paragraphX2"></div>

	<div class="table-2">



		@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'Запланированные'])
		<div class="paragraphX2"></div>
		@component('zADMIN.PAGE.Customer._wrap.table_2')
			@slot('status', 'tel')
			@slot('type', 'звонок менеджера')
			@slot('date', '01 декабрь 2023')
			@slot('name', 'звонок менеджера')

			@slot('tz')
				проинформировать о новой коллекции осень-зима
			@endslot
		@endcomponent



		@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'Прошедшие'])
		<div class="paragraphX2"></div>

		<div class="Archive" style="opacity: .5">
			@component('zADMIN.PAGE.Customer._wrap.table_2')
				@slot('status', 'telegram')
				@slot('type', 'telegram')
				@slot('date', '23 февраль 2021')
				@slot('name', 'выслан подарочный сертификат')

				{{-- @slot('info')
					текст от менеджера "как отреагировал на звонок"
				@endslot --}}
			@endcomponent



			@component('zADMIN.PAGE.Customer._wrap.table_2')
				@slot('status', 'whatsapp')
				@slot('type', 'whatsapp')
				@slot('date', '23 февраль 2021')
				@slot('name', 'выслан подарочный сертификат')

				{{-- @slot('info')
					текст от менеджера "как отреагировал на звонок"
				@endslot --}}
			@endcomponent


			@component('zADMIN.PAGE.Customer._wrap.table_2')
				@slot('status', 'tel')
				@slot('type', 'звонок менеджера')
				@slot('date', '01 февраль 2021')
				@slot('name', 'поздравление с Днем Рождения')

				@slot('info')
					текст от менеджера "как отреагировал на звонок"
				@endslot
			@endcomponent

			@component('zADMIN.PAGE.Customer._wrap.table_2')
				@slot('status', 'emailBg')
				@slot('date', '31 декабрь 2020')
				@slot('name', 'плановая рассылка')

				{{-- @slot('info')
					текст от менеджера "как отреагировал на звонок"
				@endslot --}}
			@endcomponent
			@component('zADMIN.PAGE.Customer._wrap.table_2')
				@slot('status', 'emailBg')
				@slot('date', '15 декабрь 2020')
				@slot('name', 'информация о новой коллекции')

				{{-- @slot('info')
					текст от менеджера "как отреагировал на звонок"
				@endslot --}}
			@endcomponent
		</div>
	</div>





</div>


 
{{-- 
<div class="hill-m"></div>
<div class="Article aura">
<div class="hMin"><span class="b600">Размеры</span> <span class="Grey">[см]</span></div>
<div class="paragraph"></div>
<dl class="-dot Void">
	<dt><span class="content-xs Grey">рост</span></dt>
	<dd>176</dd>
	<dt><span class="content-xs Grey">Обхват груди</span></dt>
	<dd>100</dd>
	<dt><span class="content-xs Grey">Обхват талии</span></dt>
	<dd>88</dd>
	<dt><span class="content-xs Grey">Обхват бедер</span></dt>
	<dd>104</dd>
	<dt><span class="content-xs Grey">Длина брюк</span></dt>
	<dd>110</dd>
</dl>
</div> --}}

{{-- 
<div class="paragraph"></div>
@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'Краткое описание'])
<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_lite_1" name="intro" placeholder='текст...'>{{$post->intro}}</textarea>
</div>
<div class="paragraph"></div>
@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'Текст'])
<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_1" name="text" placeholder='текст...'>{{$post->text}}</textarea>
</div>
<div class="hill-s"></div> --}}