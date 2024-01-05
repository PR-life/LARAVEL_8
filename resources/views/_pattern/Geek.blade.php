<div id="Geek" class="Geek @isset($class) {{ $class }} @endisset Rano">
	<div class="pointer -Close" data-click data-css data-node='parent' data-remove='On' data-loop>
		<div class="space spacePC right-text edge-rightXS" data-click data-css data-node='body' data-remove='fix -geek' data-loop>
			<div class="paragraph none_PC"></div>
			<div class="inline">
				<div id="BtnGeek" class="Close -an -black"></div>
			</div>
		</div>
	</div>
	<div class="Scroll -mbl">
		<div class="_scr _gee">
			<div class="_win">
				@stack('GeekTop')
				@yield('Geek')
				{{ $slot ?? ''}}
				@stack('GeekBottom')
				<div class="hill-m"></div>
				<div class="_Last"></div>
			</div>
		</div>
	</div>
</div>