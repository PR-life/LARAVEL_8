<div class="Article aura">


	@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'nameLanding'])
	<div class="_shell _name @error('name') Error @enderror / vol-Abs / net">
		<input id="inputName" type="text" name="name" value="{{$landing->name ?? old('name')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')Name</label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div>
	<div class="_shell _name / vol-Abs / _Open">
		<input id="inputName_en" type="text" name="en_name" value="{{$landing->en_name ?? old('en_name')}}" placeholder=".">
		<label class="Abs" for="inputName_en">@svg('plus')en_Name</label>
	</div>
	@endcomponent


	<div class="hill-s"></div>


 

	@component('zADMIN.PAGE._wrap.Tab.edit.body')
		@slot('nameTab1', 'Заголовки')
		@slot('tab_1')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE.Landing.lego.edit.lego.tab_1')
		@endslot
		@slot('tab_2')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE._lego.edit.seo.index', ['Var' => $landing])
		@endslot
	@endcomponent

	<div class="hill"></div>

	@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'h1Landing'])
	<div class="_shell _h1 / vol-Abs / net">
		<input id="inputH1" type="text" name="h1" value="{{$landing->h1 ?? old('h1')}}" placeholder=".">
		<label class="Abs" for="inputH1">@svg('plus')Заголовок h1</label>
	</div>
	<div class="_shell _h1 / vol-Abs / _Open">
		<input id="inputH1_en" type="text" name="en_h1" value="{{$landing->en_h1 ?? old('en_h1')}}" placeholder=".">
		<label class="Abs" for="inputH1_en">@svg('plus')en_h1</label>
	</div>
	@endcomponent
</div>

 


<div class="paragraph"></div>
@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'Краткое описание'])
<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_lite_1" name="intro" placeholder='текст...'>{{$landing->intro}}</textarea>
	{{-- @include('zADMIN._brick.cleanHTML') --}}
</div>
<div class="paragraph"></div>
@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'Текст'])
<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_1" name="text" placeholder='текст...'>{{$landing->text}}</textarea>
	{{-- @include('zADMIN._brick.cleanHTML') --}}
</div>
<div class="hill-s"></div>
 