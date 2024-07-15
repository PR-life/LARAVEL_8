<a class="block / void / space-m bg round shadow highlight" href="{{$Var->canonical ?? $link}}">
	<div class="h -lineHeight">{!!$Var->prev_h1 ?? $Var->name!!}</div>
	@if(isset($Var->text))
		<div class="{{$cssContent ?? 'content-m -lineHeight'}}">
			{!!\Illuminate\Support\Str::words(strip_tags($Var->text), 30, $end="...")!!}
		</div>
	@elseif(isset($Var->article))
		<div class="{{$cssContent ?? 'content-m -lineHeight'}}">
			{!!\Illuminate\Support\Str::words(strip_tags($Var->article), 30, $end="...")!!}
		</div>
	@endif
</a>
