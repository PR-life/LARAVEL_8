<div id="{{$id}}">
	<div id="Oi" class="Oi">
		<div id="oiBar" class="oiBar flex / index relative {{ $cssOiBar ?? '' }} @stack('css-OiBar')">
			<div class="_wrap relative">
				<div class="_main / Abs -all / index">
					<!--googleoff: all-->
					<!--noindex-->
					@stack('Bar')
					<!--/noindex-->
					<!--googleon: all-->
					{{-- <div class="_bg / Abs -all"></div> --}}
				</div>
				<div class="{{ $cssASIDE ?? '' }}"></div>
				<div class="{{ $cssKIRA ?? '' }}"></div>
			</div>
			@stack('oiBar')
		</div>
				
		<div id="oi" class="oi index W-100 {{ $cssOi ?? '' }} @stack('css-Oi')">
			<div id="wrap" class="wrap W-100 / index relative {{ $cssOi ?? '' }} @stack('css-wrap')" data-localstorage localstorage-id>
				{{ $slot }}
			</div>
		</div>
	</div>	
</div>
