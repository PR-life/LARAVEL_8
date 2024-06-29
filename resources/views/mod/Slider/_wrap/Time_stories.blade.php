<div class="_in W-100 / Time -bg -abs -bottom / pointer index {{$loop == 0 ? 'active' : ''}}" data-item='{{$loop + 1}}'>

    <div class="noEvents / Veil _indexMin " style="opacity: .05">
		<div class="_bottom"></div>
	</div>
    
    <div class="space-leftM space-topM / noEvents relative">
        <div class="content-s Grey">{!!$slot!!}</div>
        <div class="paragraphX2"></div>
    </div>
    <div class="_line noEvents"></div>
</div>