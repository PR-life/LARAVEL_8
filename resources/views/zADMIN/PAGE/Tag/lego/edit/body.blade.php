<div class="Article aura">

	{{-- @component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'nameTag'])
	<div class="_shell _name @error('name') Error @enderror / vol-Abs / net">
		<input id="inputName" type="text" name="name" value="{{$tag->name ?? old('name')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')Name</label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div>
	<div class="_shell _name / vol-Abs / _Open">
		<input id="inputName_en" type="text" name="en_name" value="{{$tag->en_name ?? old('en_name')}}" placeholder=".">
		<label class="Abs" for="inputName_en">@svg('plus')en_Name</label>
	</div>
	@endcomponent --}}

	<div class="_shell _name @error('name') Error @enderror / vol-Abs / net">
		<input id="inputName" type="text" name="name" value="{{$tag->name ?? old('name')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')Name</label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div>
	@include('zADMIN._lego.form.slug.edit', ['Var' => $tag->slug])

	<div class="hill"></div>


	<div class="void-m">

		@component('zADMIN.PAGE._wrap.form._shell.x_hr')
			@slot('css', 'Form / vol-Abs')
			@slot('nameId','Name_2')
			@slot('name','name_2')
			{{$tag->name_2 ?? old('name_2')}}
		@endcomponent

		@component('zADMIN.PAGE._wrap.form._shell.x_hr')
			@slot('css', 'Form / vol-Abs')
			@slot('nameId','Name_3')
			@slot('name','name_3')
			{{$tag->name_3 ?? old('name_3')}}
		@endcomponent
 
		@component('zADMIN.PAGE._wrap.form._shell.x_hr')
			@slot('css', 'Form / vol-Abs')
			@slot('nameId','Name_4')
			@slot('name','name_4')
			{{$tag->name_4 ?? old('name_4')}}
		@endcomponent
 

		@component('zADMIN.PAGE._wrap.form._shell.x_hr')
			@slot('css', 'Form / vol-Abs')
			@slot('nameId','Name_5')
			@slot('name','name_5')
			{{$tag->name_5 ?? old('name_5')}}
		@endcomponent

		@component('zADMIN.PAGE._wrap.form._shell.x_hr')
			@slot('css', 'Form / vol-Abs')
			@slot('nameId','Name_6')
			@slot('name','name_6')
			{{$tag->name_6 ?? old('name_6')}}
		@endcomponent


		{{-- @component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'name6Tag'])
		<div class="_shell / vol-Abs">
			<input id="inputName6" type="text" name="name_6" value="{{$tag->name_6 ?? old('name_6')}}" placeholder=".">
			<label class="Abs" for="inputName6">@svg('plus')Name_6</label>
		</div>
		<div class="_shell _name / vol-Abs / _Open">
			<input id="inputName6_en" type="text" name="en_name_6" value="{{$tag->en_name_6 ?? old('en_name_6')}}" placeholder=".">
			<label class="Abs" for="inputName6_en">@svg('plus')en_Name_6</label>
		</div>
		@endcomponent --}}



	</div>

	
</div>

 

