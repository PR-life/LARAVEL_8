<header id="Header" class="Goo / Abs_mbl index">
	<div class="Box Edge -PC only-right / Header -h_PC / flex cI_PC bC_PC / relative">
		<div class="Article W-100 / flex cI cC_mbl / cross_PC">
			<a class="x-ava flex none_mbl block_morda / relative" href="/">
				<span class="Abs -left / pr-2 x-opVersa none_Beyond none_mbl">
					<span class="block Ico -L"></span>
				</span>
				<span class="content-m b500 nowrap / none_beyond block_morda">Арт Сити Групп</span>
			</a>
			<div class="W-100 / flex cI / none_morda">
				<div class="x-line"></div>
			</div>
		</div>
		<div class="none Beyond none_mbl x-01091746 / ml-2">
			@include('_CLOUD.xAsgrupp._skeleton.brick.btn_search')
			<div class="content ghost">_</div>
			<div class="Btn -auto slimS vol-grey round-m">
				Контакты
			</div>
		</div>
		<div class="none_Beyond none_mbl / ml-2 pl-2">
			<div class="flex">
				@includeIf('xAsgrupp.menu.top')
				@includeIf('zTHIS.honeycomb.menu.asgrupp_top')
			</div>
		</div>
	</div>
</header>
 
@includeIf('xAsgrupp.mod.Bread.index')
@includeIf('zTHIS.honeycomb.Bread.demo')