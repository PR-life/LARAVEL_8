<div class="item Quiz vol-{{$cssVol ?? ''}} {{$css06112130 ?? ''}} / relative">

    <div class="Abs -all / Bone / index">


        <div class="Scroll">
            <div class="_scr">
                    <div class="Bee -S_mbl"></div>
                    {!!$slot!!}
            </div>
        </div>

        {{-- <div class="_head / story-bg_text {{isset($center) ? 'center-text' : ''}}">

            @if(!isset($fullScreen))
            <div class="Top -h"></div>
            <div class="Header -h"></div>
            @endif

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
        <div class="_footer">
            {!!$footer ?? ''!!}
        </div> --}}
    </div>
</div>