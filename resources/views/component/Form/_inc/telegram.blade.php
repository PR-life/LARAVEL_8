<div class="_shell {!!isset($label) ? 'vol-Abs' : ''!!} @error('telegram') Error @enderror">
	@include('_._brick.text.input', [
		'Var' => 'telegram',
		'value' => old('telegram'),
		'placeholder' => 'telegram...',
		// 'jsvalidate' => 'email',
		// 'css' => 'x-js',
		// 'required' => true,
		])

	@if(isset($label))
		<label class="Abs Grey" for="telegram">{!!$label!!}</label>
	@endif

	<div class="Abs Valid help / none" title="обязательное поле"></div>
	@error('telegram')
		<div class="Abs / Nameplate -rt">{{ $errors->first('telegram') }}</div>
	@enderror
</div>