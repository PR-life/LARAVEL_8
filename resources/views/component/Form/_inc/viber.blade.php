<div class="_shell {{$css ?? ''}} {!!isset($label) ? 'vol-Abs' : ''!!} @error('viber') Error @enderror">
	@include('_._brick.text.input', [
		'Var' => 'viber',
		'value' => old('viber'),
		'placeholder' => 'viber...',
		])

	@if(isset($label))
		<label class="Abs Grey" for="viber">{!!$label!!}</label>
	@endif

	<div class="Abs Valid help / none" title="обязательное поле"></div>
	@error('viber')
		<div class="Abs / Nameplate -rt">{{ $errors->first('viber') }}</div>
	@enderror
</div>