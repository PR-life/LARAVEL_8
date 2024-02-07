<div class="Teaser vol-direct / Wagon -w / Bone / Bg -gif {!!$css ?? '-hM'!!}">
	{{-- @isset($linkImg)
	<div class="Abs -all">
		<img src="{{$linkImg}}" alt="{!!$textAlt ?? ''!!}">
	</div>
	@endisset --}}

	{{-- {!!$Veil ?? ''!!} --}}
	<div>

		<a class="_head / block relative index" href="{{$link}}">

			<img class="W-100" src="data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==" alt="заглушка {{$textTag ?? ''}}">

			{{-- <div class="Abs -all">
				<img src="https://oloid.ru/images/Article/biorezonansnaya-diagnostika/ava_wagon.jpg" alt="">
			</div> --}}
			
			<span class="Poster -S -space / dC bC / space-left / _indexMax">
				<span class="_tag content-xs">{{$textTag ?? ''}}</span>
				<span class="h2">{!!$textBanner ?? ''!!}</span>
			</span>
		</a>


		<div class="_body / space">
			{{$slot}}
		</div>

	</div>

	<div class="_footer space-bottom">
		<div class="hill-s"></div>
		<div class="W-100 center-text">
			<div class="inline">
				<a class="Btn cC" href="{{$link}}">Подробнее</a>
			</div>
		</div>
	</div>



</div>





 
{{-- 
<div class="W-100 / Teaser vol-direct / Bone {!!$css ?? ''!!}">
	<div>
		<a class="_head / block relative index" href="{{$link}}">
			<img class="W-100" src="data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==" alt="заглушка {{$textTag ?? ''}}">
			@isset($linkImg)
			<div class="Abs -all">
				<img src="{{$linkImg}}" alt="{!!$textAlt ?? ''!!}">
			</div>
			@endisset
			{!!$Veil ?? ''!!}
			<div class="Poster -S -space dC bC / space-left / _indexMax">
				<div class="flex">
					<div class="_tag content-xs">{{$textTag ?? ''}}</div>
				</div>
				<div class="h2">{!!$textBanner ?? ''!!}</div>
			</div>
		</a>
		<div class="_body / space">
			{{$slot}}
		</div>
	</div>
	<div class="_footer space-bottom">
		<div class="hill-s"></div>
		<div class="W-100 center-text">
			<div class="inline">
				@isset($link)
				<a class="Btn cC" href="{{$link}}">Подробнее</a>
				@endisset
			</div>
		</div>
	</div>
</div> --}}