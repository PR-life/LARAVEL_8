<div class="Wagon -w -wS dC bC / FIX OnOff / relative space round @isset($fix) Pointer @endisset {{$css ?? ''}}" @isset($fix) data-click data-css data-add="on" data-fix @endisset>
    <div class="content-s / Grey">{!!$text_top!!}</div>
    <div class="hill-s"></div>
    <div class="content">{!!$text_bottom!!}</div>
    @isset($fix)
    <div class="fix / cI_PC -cI_mbl" data-close>
        <div class="_fix / Article aura / flex_PC cI_PC / Jolt -t / noEvents edge-s">
            <div class="_Open W-100 yesEvents">
                <div class="HMin text bg-pop / space round void">
                    {!!$fix!!}
                </div>
            </div>
        </div>
    </div>
    @endisset
    {{$slot}}
</div>