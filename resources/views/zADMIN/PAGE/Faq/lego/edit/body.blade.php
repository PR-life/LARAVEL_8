<div class="Article aura">
	@component('zADMIN._wrap.form._shell.Lang', ['id' => 'nameFaq'])
		<div class="_shell _name @error('name') Error @enderror / vol-Abs / net">
			<input id="inputName" type="text" name="name" value="{{$faq->name ?? old('name')}}" placeholder=".">
			<label class="Abs" for="inputName">@svg('plus')Name</label>
			@error('name')
				<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
			@enderror
		</div>
		<div class="none on / _shell _name / vol-Abs">
			<input id="inputName_en" type="text" name="en_name" value="{{$faq->en_name ?? old('en_name')}}" placeholder=".">
			<label class="Abs" for="inputName_en">@svg('plus')en_Name</label>
		</div>
	@endcomponent

	<div class="hill-s"></div>

	@component('zADMIN._wrap.form._shell.Lang', ['id' => 'h1Faq'])
		<div class="_shell _h1 / vol-Abs / net">
			<input id="inputH1" type="text" name="h1" value="{{$faq->h1 ?? old('h1')}}" placeholder=".">
			<label class="Abs" for="inputH1">@svg('plus')Заголовок h1</label>
		</div>
		<div class="none on / _shell _h1 / vol-Abs">
			<input id="inputH1_en" type="text" name="en_h1" value="{{$faq->en_h1 ?? old('en_h1')}}" placeholder=".">
			<label class="Abs" for="inputH1_en">@svg('plus')en_h1</label>
		</div>
	@endcomponent
</div>

<div class="paragraph"></div>


<div class="Article aura / pl-2">
@component('zADMIN._wrap.form._shell.Lang', ['id' => 'textFaq'])

	<div class="net">
		@include('zADMIN._wrap.text.nameTextarea', ['name' => 'текст'])
		<div class="paragraph"></div>
		<div class="_shell / Note -lite">
			<textarea id="tinymce_1" name="text" placeholder='текст...'>{{$faq->text}}</textarea>
			{{-- @include('zADMIN._brick.cleanHTML') --}}
		</div>
	</div>

	<div class="none on">
		<div class="paragraph"></div>
		<div class="_shell / Note -lite">
			<textarea id="tinymce_2" name="en_text" placeholder='текст...'>{{$faq->en_text}}</textarea>
				{{-- @include('zADMIN._brick.cleanHTML') --}}
		</div>
	</div>
@endcomponent
</div>