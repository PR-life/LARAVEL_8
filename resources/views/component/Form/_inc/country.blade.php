<div class="_shell {{$css06121925 ?? ''}} {!!isset($label) ? 'vol-Abs placeholder-none' : ''!!} @error('country') Error @enderror">
	@include('_._brick.text.input', [
		'Form' => $formIdName ?? 'Demo',
		'Var' => 'country',
		'value' => old('country'),
		'placeholder' => 'country',
		])
	@error('country')
		<div class="Abs / Nameplate -rt">{{ $errors->first('country') }}</div>
	@enderror
</div>