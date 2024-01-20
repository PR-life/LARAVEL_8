<div class="Article aura">
	@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'namePost'])
	<div class="_shell _name @error('name') Error @enderror / vol-Abs / net">
		<input id="inputName" type="text" name="name" value="{{$post->name ?? old('name')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')Name</label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div>
	<div class="_shell _name / vol-Abs / _Open">
		<input id="inputName_en" type="text" name="en_name" value="{{$post->en_name ?? old('en_name')}}" placeholder=".">
		<label class="Abs" for="inputName_en">@svg('plus')en_Name</label>
	</div>
	@endcomponent

	@include('zADMIN._lego.form.slug.edit', ['Var' => $post->slug])

	<div class="hill-s"></div>

	@component('zADMIN.PAGE._wrap.Tab.edit.body')
		@slot('tab_1')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE.Post._lego.edit.lego.teaser')
		@endslot
		@slot('tab_2')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE._lego.edit.seo.canonical', ['Var' => $post, 'nameModel' => 'Post'])
		@endslot
	@endcomponent

	<div class="hill"></div>


	@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'h1Post'])
	<div class="_shell _h1 / vol-Abs / net">
		<input id="inputH1" type="text" name="h1" value="{{$post->h1 ?? old('h1')}}" placeholder=".">
		<label class="Abs" for="inputH1">@svg('plus')Заголовок h1</label>
	</div>
	<div class="_shell _h1 / vol-Abs / _Open">
		<input id="inputH1_en" type="text" name="en_h1" value="{{$post->en_h1 ?? old('en_h1')}}" placeholder=".">
		<label class="Abs" for="inputH1_en">@svg('plus')en_h1</label>
	</div>
	@endcomponent
</div>

 



<div class="paragraph"></div>
@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'Краткое описание'])
<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_lite_1" name="intro" placeholder='текст...'>{{$post->intro}}</textarea>
	{{-- @include('zADMIN._brick.cleanHTML') --}}
</div>
<div class="paragraph"></div>
@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'Текст'])
<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_1" name="text" placeholder='текст...'>{{$post->text}}</textarea>
	{{-- @include('zADMIN._brick.cleanHTML') --}}
</div>
<div class="hill-s"></div>
 
