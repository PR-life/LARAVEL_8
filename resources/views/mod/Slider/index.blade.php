<div id="{{$id ?? 'Slider'}}" class="Slider / index {!!$css28061029 ?? '-move / relative'!!}" data-current="1" itemscope itemtype="https://schema.org/ImageGallery">
	<meta itemprop="name" content="слайдер">
	{!!$Img ?? ''!!}
 	{!!$manager ?? ""!!}
	{!!$package ?? ""!!}
	
	<div class="Shell / {!!$cssShell ?? '_indexMin'!!} / hidden">
		{{-- <div class="paragraphX2 none_PC"></div> --}}
		<div class="Track / {!!$cssTrack ?? ''!!}" style="transform: translateX(0px);" data-switch>
			{{$slot}}
		</div>
		<div class="Abs Loki ghost / sherpaSlider"></div>
	</div>
</div>