<div class="slider-dot / W-100 flex bC cross-xxs / -Black / index" data-click data-switch data-switch_current='.Slider' data-stop>
	@foreach($Var as $_item)
		@component('mod.Slider._wrap.Time_stories')
			@slot('loop', $loop->index)
			{!!$_item!!}
		@endcomponent
	@endforeach
	<div class="Abs Sherpa Loki ghost" data-item data-stopSlider></div>
</div>