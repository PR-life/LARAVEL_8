<div class="_shell {!!isset($label) ? 'vol-Abs' : ''!!} @error('phone') Error @enderror">
	@include('_._brick.text.input', [
		'Form' => $Form ?? 'Demo',
		'Var' => 'phone',
		'type' => 'tel',
		'value' => old('phone'),
		'placeholder' => 'phone...',
		// 'jsvalidate' => 'email',
		// 'css' => 'x-js',
		// 'required' => true,
		])

	@if(isset($label))
		<label class="Abs Grey" for="phone">{!!$label!!}</label>
	@endif

	<div class="Abs Valid help / none" title="обязательное поле"></div>
	@error('phone')
		<div class="Abs / Nameplate -rt">{{ $errors->first('phone') }}</div>
	@enderror
</div>