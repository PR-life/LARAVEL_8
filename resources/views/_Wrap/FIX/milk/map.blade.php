@component('_Wrap.FIX.wrap.FIX_on',['id' => $id, 'css' => $css_to_FIX ?? null, 'data' => $data ?? null])
    <div class="fix {{$fix_css ?? ''}}" data-close>

        <div class="_fix {{$css ?? ''}} {{$_fix_css ?? 'Pente aura W-100'}} / {{$cssMin ?? 'HWin / Jolt -t / Bg -gif'}} / yesEvents">
            <div class="Wings -mbl" style="z-index: 5">
                <div class="_win / flex eC / noEvents">
                    <div class="Close {{$css_Close ?? 'vol-black -an'}} / yesEvents" data-close></div>
                </div>
            </div>
            {!!$slot!!}
        </div>

    </div>
@endcomponent