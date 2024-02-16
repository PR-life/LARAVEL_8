@isset($link)
<a class="Edge block highlight" href="{{$link}}">
@endisset
<div class="inline relative">
	{{-- @if(isset($imgSkeleton)) --}}
		{{-- {!!$imgSkeleton!!} --}}
	{{-- @else --}}
		{{-- @include('_._brick.img.teaser')	 --}}
	{{-- @endif --}}
	@include('_._brick.img.teaser')

	@if(isset($prev_image))
	<div class="Abs -all / hidden">
		<img src="{{$prev_image}}">
	</div>
	@endif
	{{-- <div class="Veil">
		<div class="_bottom"></div>
	</div> --}}
	@include('_wrap.Poster.yota',['css' => $cssPoster ?? null])
</div>
@isset($link)
</a>
@endisset