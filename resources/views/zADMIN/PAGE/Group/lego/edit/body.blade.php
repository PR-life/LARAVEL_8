<div class="Article aura">
	@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'nameTag'])
	<div class="_shell _name @error('name') Error @enderror / vol-Abs / net">
		<input id="inputName" type="text" name="name" value="{{$group->name ?? old('name')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')Name</label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div>
	<div class="_shell _name / vol-Abs / _Open">
		<input id="inputName_en" type="text" name="en_name" value="{{$group->en_name ?? old('en_name')}}" placeholder=".">
		<label class="Abs" for="inputName_en">@svg('plus')en_Name</label>
	</div>
	@endcomponent

	@include('zADMIN._lego.form.slug.edit', ['Var' => $group->slug])

	<div class="hill"></div>

</div>

 

