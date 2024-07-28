<div class="paragraph"></div>
<a class="teaser-edge / block / highlight" href="{{$Var->canonical ?? $link}}">
	
	@isset($Var->name)
		@if($Var->foto_count_teaser)
			<div class="hMin b500">{!!$Var->prev_h1 ?? $Var->name!!}</div>
			<div class="paragraph-s"></div>
		@else
			<div class="h -lineHeight">{!!$Var->prev_h1 ?? $Var->name!!}</div>
		@endisset
		<div class="paragraph-s"></div>
		@if(!$Var->prev_image && !$Var->foto_count_teaser)
			<div class="paragraph-s"></div>
		@endisset
	@endisset

	@if(isset($Var->text))
		<div class="{{$cssContent ?? 'content-m -lineHeight'}}">
			{{-- @if ($Var->shema_teaser == 'poster') --}}
				{!!\Illuminate\Support\Str::words(strip_tags($Var->text), 20, $end="...")!!}
			{{-- @else --}}
				{{-- {!!\Illuminate\Support\Str::words(strip_tags($Var->text), 50, $end="...")!!} --}}
			{{-- @endif --}}
		</div>
	@elseif(isset($Var->article))
		<div class="{{$cssContent ?? 'content-m -lineHeight'}}">
			{!!\Illuminate\Support\Str::words(strip_tags($Var->article), 50, $end="...")!!}
		</div>
	@endif
</a>