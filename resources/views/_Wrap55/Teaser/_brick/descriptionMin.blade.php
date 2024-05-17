<a class="_edge / block / highlight" href="{{$link}}">
	@if (isset($Var->text))
	<div class="{{$cssContent ?? 'content-m -lineHeight'}}">
		{!!\Illuminate\Support\Str::words(strip_tags($Var->text), 25, $end="...")!!}
	</div>
	@endif
</a>