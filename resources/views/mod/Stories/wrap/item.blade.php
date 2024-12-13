<div class="item Story
            vol-{{$cssVol ?? ''}}
            {{$css06112130 ?? ''}}
            relative index">
    @include('mod.Stories.wrap.lego.img')
    @include('mod.Stories.wrap.lego.video')

    <div class="Abs -all _wrap / Bone / index">
        <div class="_head {{$cssHead ?? ''}} / _indexMax / @if(isset($center)) center-text @endif">

            @empty($fullScreen)
            <div class="Top -h / none_mbl"></div>
            <div class="Header -h"></div>
            @endempty

            @isset($LLC)
            <div class="Wings">
                <div class="_win -t / content b500">
                    {{$LLC}}
                    <div class="paragraph"></div>
                </div>
            </div>
            @endisset
            {!!$slot!!}
        </div>
        <div class="_footer / space-l _indexMax">
            {!!$footer ?? ''!!}
            <div class="paragraphX2 none_mbl"></div>
            <div class="hill none_PC"></div>
        </div>

        {!!$veil ?? ''!!}
    </div>
</div>