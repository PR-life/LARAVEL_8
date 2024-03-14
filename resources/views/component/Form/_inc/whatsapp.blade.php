<div class="_shell {{$css ?? ''}} {!!isset($label) ? 'vol-Abs' : ''!!} @error('whatsapp') Error @enderror">
	@include('_._brick.text.input', [
		'Var' => 'whatsapp',
		'value' => old('whatsapp'),
		'placeholder' => 'whatsapp...',
		// 'jsvalidate' => 'email',
		// 'css' => 'x-js',
		// 'required' => true,
		])

	@if(isset($label))
		<label class="Abs Grey" for="whatsapp">{!!$label!!}</label>
	@endif

	<div class="Abs Valid help / none" title="обязательное поле"></div>
	@error('whatsapp')
		<div class="Abs / Nameplate -rt">{{ $errors->first('whatsapp') }}</div>
	@enderror
</div>