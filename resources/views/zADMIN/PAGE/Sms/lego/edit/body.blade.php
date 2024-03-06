<div class="Article aura">
 
	<div class="_shell _name @error('param_1') Error @enderror / vol-Abs / net">
		<input id="inputParam_1" type="text" name="param_1" value="{{$sms->param_1 ?? old('param_1')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')заголовок сообщения</label>
		@error('param_1')
			<div class="Abs / Nameplate -rt">{{ $errors->first('param_1') }}</div>
		@enderror
	</div>
 
	@include('zADMIN._lego.form.slug.edit', ['Var' => $sms->sku, 'name' => 'sku', 'jsId' => 'inputParam_1'])

	{{-- <div class="hill-s"></div> --}}

</div>




<div class="hill"></div>
@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'sms'])
<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_lite_1" name="sms" placeholder='текст...'>{{$sms->sms}}</textarea>
	{{-- @include('zADMIN._brick.cleanHTML') --}}
</div>

<div class="paragraphX2"></div>

@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'answer'])
<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_2" name="answer" placeholder='answer...'>{{$sms->answer}}</textarea>
	{{-- @include('zADMIN._brick.cleanHTML') --}}
</div>



<div class="hill-s"></div>


{{-- 
	@component('zADMIN.PAGE._wrap.Tab.edit.body')
		@slot('nameTab1', 'Заголовки')
		@slot('tab_1')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE.Category.lego.edit.lego.tab_1')
		@endslot
		@slot('tab_2')
			@slot('nameTab2', 'Тизер')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE.Category.lego.edit.lego.tab_2')
		@endslot
		@slot('tab_3')
			@slot('nameTab3', 'SEO')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE._lego.edit.seo.canonical', ['Var' => $category])
		@endslot
	@endcomponent

	<div class="hill"></div>


	@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'h1Category'])
	<div class="_shell _h1 / vol-Abs / net">
		<input id="inputH1" type="text" name="h1" value="{{$category->h1 ?? old('h1')}}" placeholder=".">
		<label class="Abs" for="inputH1">@svg('plus')Заголовок h1</label>
	</div>
	<div class="_shell _h1 / vol-Abs / _Open">
		<input id="inputH1_en" type="text" name="en_h1" value="{{$category->en_h1 ?? old('en_h1')}}" placeholder=".">
		<label class="Abs" for="inputH1_en">@svg('plus')en_h1</label>
	</div>
	@endcomponent
</div>

 





  --}}
