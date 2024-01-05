<div id="{{$id}}" class="FIX {{$css ?? ''}}" data-click data-fix data-css data-add='on'>
    <div class="fix / flex / {{$cssFix ?? 'space-m'}}" data-close>
        <div class="_fix {{$css_fix ?? ''}} / relative">
            <div class="Wings -mbl" style="z-index: 5">
                <div class="_win / flex eC / noEvents / edge-Close">
                    <div class="Close -scroll -black -an / yesEvents" data-close></div>
                </div>
            </div>
            <div class="Abs -all {{$cssAbsAll ?? 'bg-pop round / Jolt -t / hidden'}} / _indexMin Index">
                {!!$slot!!}
            </div>
         </div>
    </div>
</div>