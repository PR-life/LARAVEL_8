<div id="{{$id ?? 'Slider'}}" class="Slider / index {!!$css ?? ''!!}" data-current="1">
	{!!$Img ?? ''!!}
 	{!!$manager ?? ""!!}
	{!!$package ?? ""!!}
	
	<div class="Shell shell-13111156 / _indexMin / Fade start-fade scene-3 / hidden">
		<div class="Track / {!!$cssTrack ?? ''!!}" style="transform: translateX(0px);" data-switch>
			{{$slot}}
		</div>
		<div class="Abs Loki ghost / sherpaSlider"></div>
	</div>
</div>