@component('_Wrap.FIX.wrap.FIX_on',['id' => $id, 'css_26071457' => $css_to_FIX ?? null])
    <div class="fix {{$fix_css ?? ''}}" data-close>

        <div class="_fix {{$css ?? ''}} {{$_fix_css ?? 'Pente aura W-100'}} / {{$cssMin ?? 'HWin / Jolt -t / Bg -gif'}} / yesEvents">
            <div class="Wings -mbl" style="z-index: 5">
                <div class="_win / flex eC / noEvents / edge-Close">
                    <div class="Close {{$css_Close ?? '-scroll -black -an'}} / yesEvents" data-close></div>
                </div>
            </div>
            {!!$slot!!}
        </div>

    </div>
@endcomponent