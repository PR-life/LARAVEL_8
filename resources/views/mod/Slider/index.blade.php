<div id="{{$id ?? 'Slider'}}" class="Slider / index {!!$css ?? ''!!}" data-current="1">
	{!!$Img ?? ''!!}
 	{!!$manager ?? ""!!}
	{!!$package ?? ""!!}
	
	<div class="Shell / _indexMin / Fade555 start-fade5555 scene-35555 / hidden">
		<div class="Track / {!!$cssTrack ?? ''!!}" style="transform: translateX(0px);" data-switch>
			{{$slot}}
		</div>
		<div class="Abs Loki ghost / sherpaSlider"></div>
	</div>
</div>