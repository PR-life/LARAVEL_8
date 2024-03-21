<div class="_shell {{$css ?? ''}} {!!isset($label) ? 'vol-Abs ' : ''!!} @error('email') Error @enderror">
	@include('_._brick.text.input', [
		'Form' => $Form ?? 'Demo',
		'Var' => 'email',
		'type' => 'email',
		'value' => old('email'),
		'placeholder' => 'email...',
		// 'jsvalidate' => 'email',
		// 'css' => 'x-js',
		// 'required' => true,
		])

	@if(isset($label))
		<label class="Abs Grey" for="email">{!!$label!!}</label>
	@endif

	{{-- <div class="Abs Valid help / none" title="обязательное поле"></div> --}}
	@error('email')
		<div class="Abs / Nameplate -rt">{{ $errors->first('email') }}</div>
	@enderror
</div>