@component('_Wrap.FIX.wrap.FIX_on',['id' => $id, 'css_26071457' => $css_to_FIX ?? null])
    <div class="fix vol-center / flex cI cC / {{$fix_css ?? 'space-m'}}" data-close>
        {{-- <div class="Scroll -scroll / noEvents"> --}}
            {{-- <div class="_scr flex cI cC / space-s"> --}}
                <div class="_fix {{$css ?? ''}} {{$_fix_css ?? 'Article aura W-100'}} / {{$cssMin ?? 'HMin-25 / Jolt -t / bg-pop round'}} / relative yesEvents">
                    <div class="Wings -mbl" style="z-index: 5">
                        <div class="_win / flex eC / noEvents / edge-Close">
                            <div class="Close {{$css_Close ?? '-scroll -black -an'}} / yesEvents" data-close></div>
                        </div>
                    </div>
                    {!!$slot!!}
                </div>
            {{-- </div> --}}
        {{-- </div> --}}
    </div>
@endcomponent