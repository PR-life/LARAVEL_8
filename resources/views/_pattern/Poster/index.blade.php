@isset($link)
<a class="Edge block highlight" href="{{$link}}">
@endisset
@if(isset($imgSkeleton))
	{!!$imgSkeleton!!}
@else
	@include('_._brick.img.teaser')	
@endif
<div class="Poster index / {{isset($h) ? '-h' : ''}} {{isset($p) ? '-p' : ''}} {{$css ?? ''}}">
	<div class="Abs -all {{$cssBg ?? ''}}"></div>
	<div class="_body Font / _indexMax">
		@isset($h)
		<div class="_h / {{$cssH ?? ''}}">{!!$h!!}</div>
		@endisset
		@isset($h2)
		<div class="_h2 / {{$cssH2 ?? ''}}">{!!$h2!!}</div>
		@endisset
		@isset($p)
			@if(isset($h) || isset($h2))
				<div class="paragraph go-s"></div>
			@endif
		<div class="_p -mbl / {{$cssP ?? ''}}">{!!$p!!}</div>
		@endisset
	</div>			
</div>
@isset($link)
</a>
@endisset