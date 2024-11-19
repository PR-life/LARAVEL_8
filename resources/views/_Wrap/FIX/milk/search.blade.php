@component('_Wrap.FIX.wrap.FIX_on',['id' => $id, 'css_26071457' => $css_to_FIX ?? null])
    <div class="fix {{$fix_css ?? ''}}" data-close>

        <div class="_fix {{$css ?? ''}} {{$_fix_css ?? 'Pente aura W-100'}} / {{$cssMin ?? ''}} noEvents">
            {!!$slot!!}
        </div>

    </div>
@endcomponent