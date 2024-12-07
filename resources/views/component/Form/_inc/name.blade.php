<div class="_shell {{$css06121925 ?? ''}} {!!isset($label) ? 'vol-Abs placeholder-none' : ''!!} @error('name') Error @enderror">
	@include('_._brick.text.input', [
		'Form' => $formIdName ?? 'Demo',
		'Var' => 'name',
		'css' => $cssInput ?? '',
		'type' => 'text',
		'value' => old('name', $value ?? ''),
		'placeholder' => 'name',
		'jsvalidate' => 'name',
		// 'required' => $required ?? false,
		// 'data' => 'minlength="3" autofocus'
		// 'data' => 'minlength="2"'
		])
	
	@if(isset($label))
		@include('component.Form._inc.wrap.label',['Var'=>'name'])
	@endif

	{{-- <div class="Abs Valid help / none" title="минимум 2 символа [обязательное поле]"></div> --}}
	@if($errors->has('name'))
		<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
	@endif
</div>