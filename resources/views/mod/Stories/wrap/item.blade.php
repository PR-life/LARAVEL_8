<div class="item Story vol-{{$cssVol ?? ''}} / relative">
    @isset($img)
    <div class="Abs -all">
        <img class="H-100 W-100 / Img -cover" src="{{$img}}" alt="55555">
    </div>
    @endisset
    <div class="Abs -all / Bone / {{$textColor ?? '-Black'}} / index">
        <div class="_head / story-bg_text {{isset($center) ? 'center-text' : ''}}">

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
        </div>
    </div>
</div>