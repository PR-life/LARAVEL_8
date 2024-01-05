<div class="Article aura">
	@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'nameFAQ'])
	<div class="_shell _name @error('name') Error @enderror / vol-Abs / net">
		<input id="inputName" type="text" name="name" value="{{$faq->name ?? old('name')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')Вопрос</label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div>
	<div class="_shell _name / vol-Abs / _Open">
		<input id="inputName_en" type="text" name="en_name" value="{{$faq->en_name ?? old('en_name')}}" placeholder=".">
		<label class="Abs" for="inputName_en">@svg('plus')Вопрос_en</label>
	</div>
	@endcomponent


	<div class="hill-s"></div>
	@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'h1FAQ'])
	<div class="_shell / vol-Abs / net">
		<input id="inputH1" type="text" name="h1" value="{{$faq->h1 ?? old('h1')}}" placeholder=".">
		<label class="Abs" for="inputH1">@svg('plus')Заголовок в ответе</label>
	</div>
	<div class="_shell / vol-Abs / _Open">
		<input id="inputH1_en" type="text" name="en_h1" value="{{$faq->en_h1 ?? old('en_h1')}}" placeholder=".">
		<label class="Abs" for="inputH1_en">@svg('plus')Вопрос_en</label>
	</div>
	@endcomponent
</div>

 



<div class="paragraph"></div>
@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'текст в ответе'])
<div class="paragraph"></div>


@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'textFAQ'])


	<div class="_shell Article aura / Note -lite">
		<textarea id="tinymce_lite_1" name="text" placeholder='текст...'>{{$faq->text}}</textarea>
	</div>
	<div class="_shell / Article aura / Note -lite / _Open">
		<textarea id="tinymce_lite_2" name="en_text" placeholder='text...'>{{$faq->en_text}}</textarea>
	</div>
@endcomponent
<div class="hill-s"></div>
 
