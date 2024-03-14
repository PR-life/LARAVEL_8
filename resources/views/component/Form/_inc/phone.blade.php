<div class="_shell {{$css ?? ''}} {!!isset($label) ? 'vol-Abs placeholder-none' : ''!!} @error('phone') Error @enderror">
	@include('_._brick.text.input', [
		'Form' => $Form ?? 'Demo',
		'Var' => 'phone',
		'type' => 'tel',
		'value' => old('phone'),
		'placeholder' => 'phone...',
		// 'jsvalidate' => 'email',
		// 'css' => 'x-js',
		'required' => $required ?? false,
		])

	@if(isset($label))
		<label class="Abs Grey" for="phone">{!!$label!!}</label>
	@endif

	@if(isset($required))
	<div class="Abs Valid help / none" title="обязательное поле"></div>
	@endif
	@error('phone')
		<div class="Abs / Nameplate -rt">{{ $errors->first('phone') }}</div>
	@enderror
</div>