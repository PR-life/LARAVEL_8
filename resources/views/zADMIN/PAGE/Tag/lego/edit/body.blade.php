<div class="Article aura">

	@component('zADMIN._wrap.form._shell.Lang', ['id' => 'nameTag'. (class_basename($tag))])
	<div class="_shell _name @error('name') Error @enderror / vol-Abs / net">
		<input id="inputName" type="text" name="name" value="{{$tag->name ?? old('name')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')Name</label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div>
	<div class="none on / _shell _name / vol-Abs">
		<input id="inputName_en" type="text" name="en_name" value="{{$tag->en_name ?? old('en_name')}}" placeholder=".">
		<label class="Abs" for="inputName_en">@svg('plus')en_Name</label>
	</div>
	@endcomponent
	@include('zADMIN._lego.form.slug.edit', ['Var' => $tag->slug])

	<div class="hill"></div>


	<div class="void-m">


		@component('zADMIN._wrap.form._shell.Lang', ['id' => 'nameTag_2'. (class_basename($tag))])
			@component('zADMIN._wrap.form._shell.x_hr')
				@slot('css', 'Form / vol-Abs')
				@slot('nameId','Name_2')
				@slot('name','name_2')
				{{$tag->name_2 ?? old('name_2')}}
			@endcomponent
			<div class="none on">
			@component('zADMIN._wrap.form._shell.x_hr')
				@slot('css', 'Form / vol-Abs')
				@slot('nameId','en_Name_2')
				@slot('name','en_name_2')
				{{$tag->en_name_2 ?? old('en_name_2')}}
			@endcomponent
			</div>
		@endcomponent



		@component('zADMIN._wrap.form._shell.x_hr')
			@slot('css', 'Form / vol-Abs')
			@slot('nameId','Name_3')
			@slot('name','name_3')
			{{$tag->name_3 ?? old('name_3')}}
		@endcomponent
 
		@component('zADMIN._wrap.form._shell.x_hr')
			@slot('css', 'Form / vol-Abs')
			@slot('nameId','Name_4')
			@slot('name','name_4')
			{{$tag->name_4 ?? old('name_4')}}
		@endcomponent
 

		@component('zADMIN._wrap.form._shell.x_hr')
			@slot('css', 'Form / vol-Abs')
			@slot('nameId','Name_5')
			@slot('name','name_5')
			{{$tag->name_5 ?? old('name_5')}}
		@endcomponent

		@component('zADMIN._wrap.form._shell.x_hr')
			@slot('css', 'Form / vol-Abs')
			@slot('nameId','Name_6')
			@slot('name','name_6')
			{{$tag->name_6 ?? old('name_6')}}
		@endcomponent


	</div>


	<div class="paragraphX2"></div>
	@include('zADMIN._wrap.text.nameTextarea', ['name' => 'Интро'])
	<div class="paragraph"></div>
	<div class="_shell Article aura / Note -lite">
		<textarea id="tinymce_1" name="intro" placeholder='текст...'>{{$tag->intro}}</textarea>
	</div>
	<div class="hill-s"></div>

	
</div>

 

