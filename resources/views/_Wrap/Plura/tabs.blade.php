<div id="tab_EditTabBody" class="Tabs" localstorage-controlCss addcss='-x' param-id='active_menuPluraTab'>

    <div id="555x_06051448" class=" relative index" 
        {{-- data-click data-css data-toggle='On' --}}
        {{-- data-localstorage localstorage-id --}}
    >

        {{-- <div class="_close / Abs -all / _indexMax / x-06051532 / pointer"></div> --}}

        {{-- @include('_brick.Close.abs.Axon') --}}

        {{-- <div class="paragraph"></div> --}}
        
        {{-- <div class="relative"> --}}
            {{-- <div class="Field -l -w / void-m"> --}}
                {{-- <div class="Max_H_19101420 / space-right_manager" data-stopclick> --}}
                    <div class="_shell / _tab x1 / void-m">{!!$tab_1 ?? '<h1>EMPTY 1</h1>'!!}</div>
                    <div class="_shell / _tab x2 / void-m">{!!$tab_2 ?? '<h1>EMPTY 2</h1>'!!}</div>
                    @isset($tab_3)
                    <div class="_shell / _tab x3 / void-m">{!!$tab_3!!}</div>
                    @endisset
                    {{-- <div class="_shell / _tab x4">{!!$tab_4 ?? '<h1>EMPTY</h1>'!!}</div> --}}
                {{-- </div> --}}
            {{-- </div> --}}
        {{-- </div> --}}
    </div>
</div>