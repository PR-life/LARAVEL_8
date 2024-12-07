<div class="_shell {{$css06121925 ?? ''}} {!!isset($label) ? 'vol-Abs placeholder-none' : ''!!} @error('param_2') Error @enderror">
	@include('_._brick.text.input', [
		'Form' => $varId ?? 'Demo',
		'Var' => 'param_2',
		'css' => $cssInput ?? '',
		'type' => 'text',
		'value' => old('param_2'),
		'placeholder' => 'param_2',
		])

	@if(isset($label))
		<label class="Abs Grey" for="param_2">{!!$label!!}</label>
	@endif

	@if($errors->has('param_2'))
		<div class="Abs / Nameplate -rt">{{ $errors->first('param_2') }}</div>
	@endif
</div>