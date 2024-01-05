<div id="{{$id}}" class="FIX" data-click data-fix data-css data-add='on'>
    <div class="fix" data-close>
        <div class="Scroll -scroll / noEvents">
            <div class="_scr flex cI cC / space-s">
                <div class="_fix {{$cssBox ?? 'Article aura W-100'}} / {{$cssMin ?? 'Jolt -t / flex_PC cI_PC'}}">
                    {!!$slot!!}
                </div>
            </div>
        </div>
    </div>
</div>