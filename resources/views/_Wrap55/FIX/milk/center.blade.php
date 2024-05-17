@component('_Wrap.FIX.wrap.FIX_on',['id' => $id, 'css_on' => $css_on ?? null])
    <div class="fix vol-center {{$fix_css ?? 'space-m'}}" data-close>
        <div class="Scroll -scroll / noEvents">
            <div class="_scr flex cI cC / space-s">
                <div class="_fix {{$css ?? ''}} {{$_fix_css ?? 'Article aura W-100'}} / {{$cssMin ?? 'HMin-25 / Jolt -t / flex_PC cI_PC / bg-pop'}} / yesEvents">
                    {!!$slot!!}
                </div>
            </div>
        </div>
    </div>
@endcomponent