<div class="_shell {{$css ?? ''}} @error('city') Error @enderror">
	@include('_._brick.text.input', [
		'Form' => $Form ?? 'Demo',
		'Var' => 'city',
		'css' => null,
		'value' => old('city'),
		'placeholder' => 'city',
		])
	<div class="Abs Valid / none"></div>
	@error('city')
		<div class="Abs / Nameplate -rt">{{ $errors->first('city') }}</div>
	@enderror
</div>