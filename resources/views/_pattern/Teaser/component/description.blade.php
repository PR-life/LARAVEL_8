<div class="paragraph"></div>
<a class="_edge / block / highlight" href="{{$VarRoute}}">
	@isset($Var->name)
		@if($Var->foto_count_teaser)
			<div class="hMin b500">{!!$Var->name!!}</div>
			<div class="paragraph-s"></div>
		@else
			<div class="h -lineHeight">{!!$Var->name!!}</div>
		@endisset
		<div class="paragraph-s"></div>
		@if(!$Var->prev_image && !$Var->foto_count_teaser)
			<div class="paragraph-s"></div>
		@endisset
	@endisset
	@if (isset($Var->text))
		<div class="content">
			{!!\Illuminate\Support\Str::words(strip_tags($Var->text), 20, $end="...")!!}
		</div>
	@endif
</a>