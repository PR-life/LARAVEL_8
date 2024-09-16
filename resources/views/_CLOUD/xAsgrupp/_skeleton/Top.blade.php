<div class="paragraphX2 none Beyond"></div>
<header id="Top" class="Wings_beyond noEvents / Abs_mbl -rt / none-beyond block_morda / edge-s">
	<div class="_win">
		<div class="Top -h / Edge -PC only-right / flex eC_PC bC_mbl cI_mbl">
			<div class="_left none_mbl flex_morda / flex cI_PC cross-m / yesEvents">
				<div class="none_mbl / flex cross-m / Family-OpenSans -Grey">
					@includeif('xAsgrupp._skeleton.lego.top_1')
				</div>
				<a class="flex cI / Grey" rel="nofollow" href="tel:{{__('_const/asgrupp.phoneCode')}}" title="{{__('_const/asgrupp.title')}}, Москва {{__('_const/asgrupp.phoneView')}}">
					<span class="Ico -S / mr-1">@svg('tel')</span>
					<span class="content-xxs / none_mbl">{{__('_const/asgrupp.phoneView')}}</span>
				</a>
				<div class="none_mbl / Min -w1">
					@guest()
						<a href="" class="Btn -auto slimS vol-grey round-m / none_beyond">войти</a>
						<div href="" class="Btn -auto slimS vol-grey round-m / none Beyond">контакты</div>
					@endguest
					@auth()
						<div class="flex eC">
							<div class="Ava -S -def"></div>
						</div>
					@endauth
				</div>
			</div>
			<div class="_right x-edge none_PC / yesEvents">
				<label for="inputMenuMain">
					<div class="Burger vol-def">
						<div class="_burger">
							<div class="_inner"></div>
						</div>
					</div>
				</label>
			</div>
		</div>
	</div>
</header>


{{-- <label for="inputMenuMain" class="flex cC cI">
	<span class="Hamburger -minus">
		<span class="_inner"></span>
	  </span>	
</label> --}}