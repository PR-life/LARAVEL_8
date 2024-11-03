<div class="item Story / relative">
    @isset($img)
    <img class="H-100 W-100 / Img -cover" src="{{$img}}" alt="55555">
    @endisset
    <div class="Abs -all / Bone / {{$textColor ?? '-Black'}} / index">
        <div class="_head / story-bg_text {{$center ? 'center-text' : ''}}">
            <div class="Top -h"></div>
            <div class="Header -h"></div>
            @isset($img)
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