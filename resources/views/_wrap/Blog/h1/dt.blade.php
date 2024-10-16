<div class="Pente aura / Void Edge -PC [ margin bottom S ]">
	<nav>
		{{-- <ul class="Bread vol-inline_mbl vol-oblique / flex_PC nowrap Ellipsis / edge-leftS / -Grey">
			<li class="float_mbl">
				<a href="/">
					<span class="Ico -S / block">
						<svg><use xlink:href="#svg-tornado"></use></svg>
					</span>
				</a>
			</li>
			<li><a href="/detektivnoe-agentstvo">Детективное агентство</a></li>
			<li>
				<span class="block_PC inline">
					<span class="block Max -w3 Ellipsis nowrap">
						Гарантии
					</span>
				</span>
			</li>
		</ul> --}}
	</nav>
	<div class="paragraph-s"></div>
	<div class="paragraph / none_PC"></div>

	<div class="void index">
        {!!$slot!!}
	</div>

	<div class="paragraphX2"></div>

    @isset($manager16101309)
        {!!$manager16101309!!}
        <div class="paragraph"></div>
    @endisset
    @isset($about16101309)
        {!!$about16101309!!}
    @endisset
</div>
