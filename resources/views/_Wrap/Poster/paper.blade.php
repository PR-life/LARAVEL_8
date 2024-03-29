@isset($link)
<a class="edge-s block highlight" href="{{$link}}">
@endisset
<div class="inline index relative {{$cssWrapPoster ?? ''}}">

	@include('_._brick.img.teaser')

	@if(isset($prev_image))
	<div class="Abs -all / hidden">
		<img src="{{$prev_image}}">
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
		@default
			{{-- Default case... --}}
	@endswitch
	</div>
	@endisset

	@include('_wrap.Poster.index',['css' => $cssPoster ?? null])
</div>
@isset($link)
</a>
@endisset