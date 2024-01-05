<div class="inline">
	<ul id="{{$id_menu}}" class="menu -tag -S / Kite kite-space / pointer" data-click data-switch data-package='{{$id_package}}' data-stop data-localstorage localstorage-id='switch' data-check='active'>
        {{$menu}}
	</ul>
</div>


<div id="{{$id_package}}" class="Tabs / relative" localstorage-controlCss addcss='-x' param-id='{{$id_menu}}'>
    <div class="_shell / _tab x1">
        {!!$tab_1!!}
    </div>
    <div class="_shell / _tab x2">
        {!!$tab_2!!}
    </div>
    <div class="_shell / _tab x3">
        {!!$tab_3 ?? ''!!}
    </div>
    <div class="_shell / _tab x4">
        {!!$tab_4 ?? ''!!}
    </div>
</div>