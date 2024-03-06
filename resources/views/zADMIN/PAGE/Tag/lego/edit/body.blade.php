<div class="Article aura">
	@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'nameTag'])
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
	@endcomponent

	@include('zADMIN._lego.form.slug.edit', ['Var' => $tag->slug])

	<div class="hill"></div>


	<div class="void-m">
		@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'name2Tag'])
		<div class="_shell / vol-Abs">
			<input id="inputName2" type="text" name="name_2" value="{{$tag->name_2 ?? old('name_2')}}" placeholder=".">
			<label class="Abs" for="inputName2">@svg('plus')Name_2</label>
		</div>
		<div class="_shell _name / vol-Abs / _Open">
			<input id="inputName2_en" type="text" name="en_name_2" value="{{$tag->en_name_2 ?? old('en_name_2')}}" placeholder=".">
			<label class="Abs" for="inputName2_en">@svg('plus')en_Name_2</label>
		</div>
		@endcomponent



		@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'name3Tag'])
		<div class="_shell / vol-Abs">
			<input id="inputName3" type="text" name="name_3" value="{{$tag->name_3 ?? old('name_3')}}" placeholder=".">
			<label class="Abs" for="inputName3">@svg('plus')Name_3</label>
		</div>
		<div class="_shell _name / vol-Abs / _Open">
			<input id="inputName3_en" type="text" name="en_name_3" value="{{$tag->en_name_3 ?? old('en_name_3')}}" placeholder=".">
			<label class="Abs" for="inputName3_en">@svg('plus')en_Name_3</label>
		</div>
		@endcomponent



		@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'name4Tag'])
		<div class="_shell / vol-Abs">
			<input id="inputName4" type="text" name="name_4" value="{{$tag->name_4 ?? old('name_4')}}" placeholder=".">
			<label class="Abs" for="inputName4">@svg('plus')Name_4</label>
		</div>
		<div class="_shell _name / vol-Abs / _Open">
			<input id="inputName4_en" type="text" name="en_name_4" value="{{$tag->en_name_4 ?? old('en_name_4')}}" placeholder=".">
			<label class="Abs" for="inputName4_en">@svg('plus')en_Name_4</label>
		</div>
		@endcomponent


		@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'name5Tag'])
		<div class="_shell / vol-Abs">
			<input id="inputName5" type="text" name="name_5" value="{{$tag->name_5 ?? old('name_5')}}" placeholder=".">
			<label class="Abs" for="inputName5">@svg('plus')Name_5</label>
		</div>
		<div class="_shell _name / vol-Abs / _Open">
			<input id="inputName5_en" type="text" name="en_name_5" value="{{$tag->en_name_5 ?? old('en_name_5')}}" placeholder=".">
			<label class="Abs" for="inputName5_en">@svg('plus')en_Name_5</label>
		</div>
		@endcomponent

		@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'name6Tag'])
		<div class="_shell / vol-Abs">
			<input id="inputName6" type="text" name="name_6" value="{{$tag->name_6 ?? old('name_6')}}" placeholder=".">
			<label class="Abs" for="inputName6">@svg('plus')Name_6</label>
		</div>
		<div class="_shell _name / vol-Abs / _Open">
			<input id="inputName6_en" type="text" name="en_name_6" value="{{$tag->en_name_6 ?? old('en_name_6')}}" placeholder=".">
			<label class="Abs" for="inputName6_en">@svg('plus')en_Name_6</label>
		</div>
		@endcomponent



	</div>

	
</div>

 

