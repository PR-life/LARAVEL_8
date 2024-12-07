<div class="_shell {{$css06121925 ?? ''}} {!!isset($label) ? 'vol-Abs placeholder-none' : ''!!} @error('area') Error @enderror">
	@include('_._brick.text.input', [
		'Form' => $varId ?? 'Demo',
		'Var' => 'area',
		'jsvalidate' => 'area',
		'css' => $cssInput ?? '',
		'type' => 'text',
		'value' => old('area', $value ?? ''),
		'placeholder' => 'area',
		// 'required' => true,
		// 'data' => 'minlength="3" autofocus'
		// 'data' => 'minlength="2"'
		])
	
	@if(isset($label))
		<label class="Abs Grey" for="area">{!!$label!!}</label>
	@endif

	{{-- <div class="Abs Valid help / none" title="минимум 2 символа [обязательное поле]"></div> --}}
	@if($errors->has('area'))
		<div class="Abs / Nameplate -rt">{{ $errors->first('area') }}</div>
	@endif
</div>