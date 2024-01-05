<div class="_wrap _ef -an / flex cI / {{$css ?? ''}} {{$param ?? ''}} x-{{$i}}">


	<div class="space-m / W-100 / OnOff">
    
		@if($info)
			<div class="content / flex bC / pointer" data-click data-css data-node="parent" data-toggle='On'>
		@else
			<div class="content / flex bC">
		@endif


			@isset($badge)
			<span>
				<span class="inline Shift -left -stepS -mbl">
					<span class="Badge {{$cssBadge}} -paddingS">
						<span class="net">{{$badge}}</span>
					</span>
				</span>
				{!!$name!!}
			</span>
			@endisset
            @if($info)
			<div class="flex">
				<div class="_OffLvl_3 Ico">
					<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z" stroke="#1C274C" stroke-width="1.5"/>
					<path d="M10.125 8.875C10.125 7.83947 10.9645 7 12 7C13.0355 7 13.875 7.83947 13.875 8.875C13.875 9.56245 13.505 10.1635 12.9534 10.4899C12.478 10.7711 12 11.1977 12 11.75V13" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
					<circle cx="12" cy="16" r="1" fill="#1C274C"/>
					</svg>
				</div>
				<div class="_OpenLvl_3">
					<div class="Close -black"></div>
				</div>
			</div>
            @endisset
		</div>
        {!!$slot!!}
    </div>
</div>