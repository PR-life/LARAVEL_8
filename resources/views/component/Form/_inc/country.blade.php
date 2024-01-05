<div class="_shell @error('country') Error @enderror">
	@include('_._brick.text.input', [
		'Form' => $Form ?? 'Demo',
		'Var' => 'country',
		'value' => old('country'),
		'placeholder' => 'country',
		])
	@error('country')
		<div class="Abs / Nameplate -rt">{{ $errors->first('country') }}</div>
	@enderror
</div>