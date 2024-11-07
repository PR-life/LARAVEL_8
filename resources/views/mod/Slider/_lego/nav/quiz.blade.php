<div class="Abs -lt -r space-s / _indexMax">
    <div class="slider-dots / W-100 flex bC cross-xxs / index">
        @foreach($arrTile as $_item)
            @component('mod.Slider._wrap.Time.quiz')
                @slot('loop', $loop->index)
                <div class="content">{!!$_item!!}</div>
            @endcomponent
        @endforeach
    </div>
</div>
{{-- @include('mod.Slider._brick.button.story') --}}