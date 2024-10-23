@isset($link)
<a class="edge-s block highlight" href="{{$Var->canonical ?? $link}}">
@endisset
<div class="inline index relative {{$cssWrapPoster ?? ''}}">

	@include('_._brick.img.teaser')

	@if(isset($image))
	<div class="Abs -all / hidden">
		<img src="{{$image}}">
	</div>
	@endif

	@isset($Veil)
	<div class="Veil">
	@switch($Veil)
		@case('bottom')
			<div class="_bottom"></div>
			@break
		@case('left')
			<div class="_left"></div>
			@break
		@case('mid')
			<div class="_mid"></div>
			@break
		@default
			{{-- Default case... --}}
	@endswitch
	</div>
	@endisset

	<div class="_dot / Abs -all"></div>

	<div class="Poster -center vol-yota {{$css ?? '-Black round'}} / _indexMax index">
		<div class="Font -S / space relative">
			<div class="paragraph"></div>
			@isset($Var->prev_h1)
			<div class="_h -vw / b500 center-text">{!!$Var->prev_h1!!}</div>
			@endisset
			@isset($Var->prev_h2)
			<div class="_h2 -vw / b500 center-text">{!!$Var->prev_h2!!}</div>
			@endisset
			@isset($Var->prev_p)
			<div class="paragraph-s"></div>
			<div class="_p p center-text">{!!$Var->prev_p!!}</div>
			@endisset
		</div>			
	</div>
</div>
@isset($link)
</a>
@endisset