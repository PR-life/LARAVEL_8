<div class="inline">
    <ul id="active_menuEditTabBody" class="menu -tag -S / Kite kite-space / pointer" 
        data-click data-switch data-package='tab_EditTabBody' 
        data-stop 
        data-localstorage localstorage-id='switch'
        data-check="active"
    >
        <li data-item='1' data-packagetype='css' data-packagefoo='radio' package="Tabs -x1"><span class="a noEvents">{{$nameTab1 ?? 'Тизер'}}</span></li>
        <li data-item='2' data-packagetype='css' data-packagefoo='radio' package="Tabs -x2"><span class="a noEvents">{{$nameTab2 ?? 'SEO'}}</span></li>
		@isset($nameTab3)
        <li data-item='3' data-packagetype='css' data-packagefoo='radio' package="Tabs -x3"><span class="a noEvents">{{$nameTab3}}</span></li>
		@endisset
    </ul>
</div>


<div id="tab_EditTabBody" class="Tabs" localstorage-controlCss addcss='-x' param-id='active_menuEditTabBody'>

	<div id="x_06051448" class="Fog / Gardener / OnOff Soma / relative index" 
		data-click data-css data-toggle='On -on'
		data-localstorage localstorage-id
	>

		<div class="_close / Abs -all / _indexMax / x-06051532 / pointer"></div>

		@include('_brick.Close.abs.Axon')

		<div class="paragraph"></div>
		
		<div class="relative">
			<div class="Field -l -w / void-m">
				<div class="Max_H_19101420 / space-right_manager" data-stopclick>
					<div class="_shell / _tab x1 / void-m">{!!$tab_1 ?? '<h1>EMPTY</h1>'!!}</div>
					<div class="_shell / _tab x2 / void-m">{!!$tab_2 ?? '<h1>EMPTY</h1>'!!}</div>
					@isset($tab_3)
					<div class="_shell / _tab x3 / void-m">{!!$tab_3!!}</div>
					@endisset
					{{-- <div class="_shell / _tab x4">{!!$tab_4 ?? '<h1>EMPTY</h1>'!!}</div> --}}
				</div>
			</div>
		</div>
	</div>
</div>