<div id="{{$id ?? 'Slider'}}" class="Slider jsSlider / {!!$css28061029 ?? '-move'!!} index relative" data-current='1' itemscope itemtype="https://schema.org/ImageGallery">
	<meta itemprop="name" content="слайдер">
	{!!$img ?? ''!!}
 	{!!$manager ?? ""!!}
	{!!$package ?? ""!!}
	
	<div class="Shell / {!!$cssShell ?? '_indexMin'!!} / hidden">
		<div class="Track / {!!$cssTrack ?? '-solo'!!}" data-carousel='{{$carousel ?? "false"}}'>
			{{$slot}}
		</div>
		<div class="Abs Loki ghost / sherpaSlider"></div>
	</div>
</div>