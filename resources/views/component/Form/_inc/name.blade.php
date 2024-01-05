<div class="_shell {{$css ?? ''}} {!!isset($label) ? 'vol-Abs' : ''!!} @error('name') Error @enderror">
	@include('_._brick.text.input', [
		'Form' => $Form ?? 'Demo',
		'Var' => 'name',
		'jsvalidate' => 'name',
		'css' => 'x-js',
		'type' => 'text',
		'value' => old('name'),
		'placeholder' => 'name',
		// 'required' => true,
		// 'data' => 'minlength="3" autofocus'
		// 'data' => 'minlength="2"'
		])
	
	@if(isset($label))
		<label class="Abs Grey" for="name">{!!$label!!}</label>
	@endif

	<div class="Abs Valid help / none" title="минимум 2 символа [обязательное поле]"></div>
	@if ($errors->has('name'))
		<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
	@endif
</div>