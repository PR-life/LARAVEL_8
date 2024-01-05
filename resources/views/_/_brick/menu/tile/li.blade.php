<li class="{{ $css ?? '' }}">
	<a class="flex dC bC / space-s round-s" href="{{ $link }}">
		<span class="_head"></span>
		<span class="_footer / flex eI">
			<span class="flex dC cC">
				{{ $slot }}
			</span>
		</span>
	</a>
</li>