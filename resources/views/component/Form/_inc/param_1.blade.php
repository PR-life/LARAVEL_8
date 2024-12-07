<div class="_shell {{$css06121925 ?? ''}} {!!isset($label) ? 'vol-Abs placeholder-none' : ''!!} @error('param_1') Error @enderror">
	@include('_._brick.text.input', [
		'Form' => $varId ?? 'Demo',
		'Var' => 'param_1',
		'css' => $cssInput ?? '',
		'type' => 'text',
		'value' => old('param_1'),
		'placeholder' => 'param_1',
		])

	@if(isset($label))
		<label class="Abs Grey" for="param_1">{!!$label!!}</label>
	@endif

	@if($errors->has('param_1'))
		<div class="Abs / Nameplate -rt">{{ $errors->first('param_1') }}</div>
	@endif
</div>