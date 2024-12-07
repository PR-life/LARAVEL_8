<div class="_shell {{$css06121925 ?? ''}} {!!isset($label) ? 'vol-Abs placeholder-none' : ''!!} @error('city') Error @enderror">
	@include('_._brick.text.input', [
		'Form' => $formIdName ?? 'Demo',
		'Var' => 'city',
		'css' => $cssInput ?? '',
		'type' => 'text',
		'value' => old('city'),
		'placeholder' => 'city',
		])

	@if(isset($label))
		<label class="Abs Grey" for="city">{!!$label!!}</label>
	@endif

	@if($errors->has('city'))
		<div class="Abs / Nameplate -rt">{{ $errors->first('city') }}</div>
	@endif
</div>