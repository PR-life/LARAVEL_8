<div id="Message" class="Message / flex space dC eC / void index / {{$class ?? ''}}">
{{-- <div class="Message / flex space dC eC / void index / @if($class) On @endif" data-click data-css data-remove='On'> --}}
	<div class="Hook Abs -all -bg -op / Rano" data-click data-css data-node='Message' data-remove='On'></div>
	<div class="Sms / Jolt -t / _indexMax round yesEvents {{$cssSms ?? ''}}">
		<div class="_wrap / space round">
			<div class="space relative">
				<span class="Close -an -white Abs -rt / net" data-click data-css data-node='Message' data-remove='On'></span>
				<div class="void">
					@isset($heading)
					<div class="h4 b600">{{ $heading }}</div>
					@endisset
					{{ $slot }}
				</div>
			</div>
		</div>
	</div>		
</div>