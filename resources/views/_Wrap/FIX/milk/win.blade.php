@component('_Wrap.FIX.wrap.FIX_on',['id' => $id, 'css_on' => $css_on ?? null])
<div class="fix / flex / {{$fix_css ?? ''}}" data-close>
    <div class="_fix {{$_fix_css ?? ''}} / relative">
        <div class="Wings -mbl" style="z-index: 5">
            <div class="_win / flex eC / noEvents / edge-Close">
                <div class="Close -scroll -black -an / yesEvents" data-close></div>
            </div>
        </div>
        <div class="Abs -all {{$css ?? ''}} {{$cssMin ?? 'bg-pop / Jolt -t / hidden'}} / _indexMin Index">
            {!!$slot!!}
        </div>
     </div>
</div>
@endcomponent