<div id="{{$id ?? 'Slider'}}" class="Slider jsSlider / index {!!$css28061029 ?? '-move / relative'!!}" data-current='1' itemscope itemtype="https://schema.org/ImageGallery">
	<meta itemprop="name" content="слайдер">
	{!!$img ?? ''!!}
 	{!!$manager ?? ""!!}
	{!!$package ?? ""!!}
	
	<div class="Shell / {!!$cssShell ?? '_indexMin'!!} / hidden">
		<div class="Track / {!!$cssTrack ?? '-solo'!!}">
			{{$slot}}
		</div>
		<div class="Abs Loki ghost / sherpaSlider"></div>
	</div>
</div>