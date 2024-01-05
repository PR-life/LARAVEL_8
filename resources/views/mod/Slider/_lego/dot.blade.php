<?php
	isset($Var) ? ($active = $Var) : $active = 1
?>
<div class="slider-dot / Dot / flex cross-s" data-click data-switch data-stop>
	@for ($i = 1; $i <= $Length; $i++)
		<div class="dot pointer {{$active == $i ? 'active' : ''}}" data-item="{{$i}}"></div>
	@endfor
	<div class="Abs Sherpa Loki ghost" data-item data-stopSlider></div>
</div>