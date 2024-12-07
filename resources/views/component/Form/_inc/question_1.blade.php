<div class="_shell {{$css06121925 ?? ''}} {!!isset($label) ? 'vol-Abs placeholder-none' : ''!!} @error('question_1') Error @enderror">
	@include('_._brick.text.input', [
		'Form' => $formIdName ?? 'Demo',
		'Var' => 'question_1',
		'css' => $cssInput ?? '',
		'type' => 'text',
		'value' => old('question_1'),
		'placeholder' => 'question_1',
		])

	@if(isset($label))
		<label class="Abs Grey" for="question_1">{!!$label!!}</label>
	@endif

	@if($errors->has('question_1'))
		<div class="Abs / Nameplate -rt">{{ $errors->first('question_1') }}</div>
	@endif
</div>