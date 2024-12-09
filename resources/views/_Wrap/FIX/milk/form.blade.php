@component('_Wrap.FIX.wrap.FIX_on',['id' => $id, 'css' => $css_to_FIX ?? null, 'data' => $addData ?? ''])
    <div class="fix / space-m {{$fix_css ?? 'vol-def'}}" data-close>
        <div class="Scroll -scroll / noEvents">
            <div class="_scr / flex dC cC_PC eC_mbl / space-s_PC">
                <div class="_fix {{$css21061537 ?? ''}} {{$_fix_css ?? 'Article aura W-100'}} / {{$cssMin ?? 'Jolt -t / bg-pop'}} / yesEvents">
                    {!!$slot!!}
                    <div class="hill-l none_PC"></div>
                </div>
            </div>
        </div>
    </div>
@endcomponent