<div class="I aura / Fluid {{$css ?? 'fluid-round'}} / Golden / Onion / Edge -PC">
    <div class="_l onion-last / {{$css_l ?? 'bg-surfshark'}}">
        <div class="paragraph"></div>
        <div class="paragraph none_mbl"></div>
        {!!$slot!!}
        <div class="paragraphX2 none_PC"></div>
    </div>
    <div class="_r onion-first /  {{$css_r ?? 'bg-surfshark-2'}} / relative noEvents">
        @include('_._brick.img.A4_hor')
        {!!$img ?? ''!!}
    </div>
</div>