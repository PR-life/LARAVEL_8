<div class="_shell {{$css06121925 ?? ''}} {!!isset($label) ? 'vol-Abs placeholder-none' : ''!!} @error('email') Error @enderror">
	@include('_._brick.text.input', [
		'Form' => $formIdName ?? 'Demo',
		'Var' => 'email',
		'type' => 'email',
		'value' => old('email', $value ?? ''),
		'placeholder' => 'email...',
		// 'jsvalidate' => 'email',
		// 'css' => 'x-js',
		// 'required' => true,
		])

	@if(isset($label))
		@include('component.Form._inc.wrap.label',['Var'=>'email'])
	@endif

	{{-- <div class="Abs Valid help / none" title="обязательное поле"></div> --}}
	@error('email')
		<div class="Abs / Nameplate -rt">{{ $errors->first('email') }}</div>
	@enderror
</div>