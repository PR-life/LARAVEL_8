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


	<div class="flex">

		<div class="_param / flex bC cI / Min -w3 / space round">
			<div>
				<div class="content-xs / Grey -c30">Дата рождения</div>
				<div class="paragraph-s"></div>
				<div class="content">{{$face->dateAsCarbon->day}} {{$face->dateAsCarbon->translatedFormat('F')}}, {{$face->dateAsCarbon->year}}</div>
			</div>
			<svg class="Ico Grey" viewBox="0 0 24 24">
				<g fill="currentColor">
					<path d="M11.988 15.64a1.721 1.721 0 001.719 1.719h2.02a1.721 1.721 0 001.719-1.719v-2.02a1.721 1.721 0 00-1.72-1.718h-2.02a1.721 1.721 0 00-1.718 1.719zm1.719-2.02h2.02v2.02h-2.021z"></path>
					<circle cx=".859" cy=".859" r=".859" transform="translate(15.727 8.164)"></circle>
					<circle cx=".859" cy=".859" r=".859" transform="translate(11.988 8.164)"></circle>
					<path d="M21.141 15.125a.859.859 0 00.859-.859v-9.11a3.441 3.441 0 00-3.437-3.437h-1.118v-.86a.859.859 0 00-1.719 0v.859h-3.91V.859a.859.859 0 00-1.719 0v.859H6.23V.859a.859.859 0 00-1.719 0v.859H3.438A3.441 3.441 0 000 5.156v13.407A3.441 3.441 0 003.438 22h15.125A3.441 3.441 0 0022 18.563a.859.859 0 00-1.719 0 1.721 1.721 0 01-1.719 1.719H3.438a1.721 1.721 0 01-1.719-1.719V5.156a1.721 1.721 0 011.719-1.718h1.074V4.3a.859.859 0 001.719 0v-.862H10.1V4.3a.859.859 0 001.719 0v-.862h3.91V4.3a.859.859 0 001.719 0v-.862h1.117a1.721 1.721 0 011.719 1.719v9.109a.859.859 0 00.857.859z"></path>
					<circle cx=".859" cy=".859" r=".859" transform="translate(4.512 15.641)"></circle>
					<circle cx=".859" cy=".859" r=".859" transform="translate(4.512 8.164)"></circle>
					<circle cx=".859" cy=".859" r=".859" transform="translate(4.512 11.902)"></circle>
					<circle cx=".859" cy=".859" r=".859" transform="translate(8.25 11.902)"></circle>
					<circle cx=".859" cy=".859" r=".859" transform="translate(8.25 8.164)"></circle>
					<circle cx=".859" cy=".859" r=".859" transform="translate(8.25 15.641)"></circle>
				</g>
			</svg>
		</div>
		
	</div>
</div>


<div class="hill-s"></div>

	@component('zADMIN.PAGE._wrap.Tab.edit.body')
	@slot('nameTab1', 'Контакты')
	@slot('nameTab2', 'Семья')
		@slot('tab_1')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE.Customer._lego.edit.lego.data')
		@endslot
		@slot('tab_2')
			<div class="paragraphX2 / net"></div>
			{{-- @include('zADMIN.PAGE._lego.edit.seo.canonical', ['Var' => $paper, 'nameModel' => 'Post']) --}}
		@endslot
	@endcomponent

	<div class="hill"></div>



	{{-- <div class="_shell _h1 / vol-Abs / net">
		<input id="inputH1" type="text" name="h1" value="{{$face->h1 ?? old('h1')}}" placeholder=".">
		<label class="Abs" for="inputH1">@svg('plus')Заголовок h1</label>
	</div> --}}


	

 



<div class="paragraph"></div>
@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'Блокнот'])
<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_lite_1" name="text" placeholder='текст...'>{{$face->note}}</textarea>
</div>
 
<div class="hill-s"></div>
 


