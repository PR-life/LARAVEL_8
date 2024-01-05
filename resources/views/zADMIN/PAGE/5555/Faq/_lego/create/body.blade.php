<div class="Article">
	@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'nameFAQ'])
	<div class="_shell _name @error('name') Error @enderror / vol-Abs / net">
		<input id="inputName" type="text" name="name" value="{{old('name') ?? ''}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')Вопрос</label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div>
	<div class="_shell _name / vol-Abs / _Open">
		<input id="inputName_en" type="text" name="en_name" value="{{old('en_name') ?? ''}}" placeholder=".">
		<label class="Abs" for="inputName_en">@svg('plus')Вопрос_en</label>
	</div>
	@endcomponent
</div>