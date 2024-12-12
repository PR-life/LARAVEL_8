<div id="Top" class="Abs_mbl -rt / edge-s">

	<div class="edge-right_PC / Top -h / flex bC_PC eI / bC_mbl cI_mbl">
		<div class="_left pl-2 / flex cross-m / -Grey / none_mbl">
			<div class="flex cI / Grey pointer" onclick="console.log(document.getElementById('milk_search').click())">
				<div class="Ico -XS / mr-2">@svg('search')</div>				
				<span class="content-xxs">Поиск по сайту</span>
			</div>
			@include('_CLOUD.xAsgrupp._skeleton.lego.top_contact')
		</div>
		<div class="_right x-edge">
			<div class="none_mbl / Min -w1">
				@guest()
					<a class="block space-s" href="{{route('login')}}">						
						<span class="content-xs">войти</span>
					</a>
				@endguest
				@auth()
					<div class="flex eC">
						<div class="Ava -XS -def"></div>
					</div>
				@endauth
			</div>
			<div id="btn_17091300" class="Burger vol-def / pointer none_PC" 
				data-click data-node='body' data-css data-add='schema-aside aside-on fix -veil' data-loop data-veil="btn_17091301">
				<div class="_burger">
					<div class="_inner"></div>
				</div>
			</div>
			<div id="btn_17091301" class="none / Ico / pointer none_PC" 
				data-click data-node='body' data-css data-remove='schema-aside aside-on fix -veil' data-loop>
				@svg('close')
			</div>
		</div>
	</div>

</div>

