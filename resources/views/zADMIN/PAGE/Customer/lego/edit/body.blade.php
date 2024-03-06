<div class="space-l void">

	<div class="_shell _name @error('surname') Error @enderror / vol-Abs label-insideInput">
		<input id="inputSurname" type="text" name="surname" value="{{$face->surname ?? old('surname')}}" placeholder=".">
		<label class="Abs" for="inputSurname">@svg('plus')Фамилия</label>
		@error('surname')
			<div class="Abs / Nameplate -rt">{{ $errors->first('surname') }}</div>
		@enderror
	</div>

	<div class="_shell _name @error('name') Error @enderror / vol-Abs label-insideInput / net">
		<input id="inputName" type="text" name="name" value="{{$face->name ?? old('name')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')Имя</label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div>

	<div class="_shell _name @error('patronymic') Error @enderror / vol-Abs label-insideInput">
		<input id="inputPatronymic" type="text" name="patronymic" value="{{$face->patronymic ?? old('patronymic')}}" placeholder=".">
		<label class="Abs" for="inputPatronymic">@svg('plus')Отчество</label>
		@error('patronymic')
			<div class="Abs / Nameplate -rt">{{ $errors->first('patronymic') }}</div>
		@enderror
	</div>


	{{-- <div class="_shell _name @error('birthday') Error @enderror / vol-Abs label-insideInput">
		<input id="inputBirthday" type="text" name="birthday" value="{{$face->birthday ?? old('birthday')}}" placeholder=".">
		<label class="Abs" for="inputBirthday">@svg('plus')Дата рождения</label>
		@error('birthday')
			<div class="Abs / Nameplate -rt">{{ $errors->first('birthday') }}</div>
		@enderror
	</div> --}}
</div>
<div class="paragraph"></div>

<div class="space-s">
	<div class="flex">
		@include('zADMIN.PAGE.Customer.lego.edit.brick.param.birthday')		
	</div>
</div>


<div class="hill-s"></div>

@component('zADMIN.PAGE._wrap.Tab.edit.body')
	@slot('nameTab1', 'Контакты')
	@slot('nameTab2', 'Семья')
		@slot('tab_1')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE.Customer.lego.edit.lego.tab_data')
		@endslot
		@slot('tab_2')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE.Customer.lego.edit.lego.tab_family')
		@endslot
@endcomponent

<div class="hill"></div>

@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'Блокнот'])
<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_lite_1" name="text" placeholder='текст...'>{{$face->note}}</textarea>
</div>
 
<div class="hill-s"></div>