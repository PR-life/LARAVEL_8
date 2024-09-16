<div id="{{$id ?? 'Wrap'}}">
	<div id="Oi" class="Oi / index">
		<div id="oiBar" class="oiBar flex / index relative {{ $cssOiBar ?? '' }} @stack('css-OiBar')">
			@stack('oiBar-before')
			<div class="_wrap W-100 / relative index">
				@stack('oiBar_before')
				<div class="_main _hidden {{ $cssOiBarMain ?? '' }} / Abs_PC -all / index">
					<!--googleoff: all-->
					<!--noindex-->
					@stack('oiBar')
					<!--/noindex-->
					<!--googleon: all-->
					{{-- <div class="_bg / Abs -all"></div> --}}
				</div>
				<div class="{{ $arrCSS['cssASIDE'] ?? 'ASIDE' }}"></div>
				<div class="{{ $arrCSS['cssKIRA'] ?? 'KIRA' }}"></div>
			</div>
			@stack('oiBar-after')
		</div>
				
		<div id="oi" class="oi index W-100 {{ $cssOi ?? '' }} @stack('css-Oi')">
			<div id="wrap" class="wrap W-100 / index relative {{ $cssOi ?? '' }} @stack('css-wrap')" data-localstorage localstorage-id>
				{{ $slot }}
			</div>
		</div>
	</div>	
</div>