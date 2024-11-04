<div class="Abs -lt -r space-s / _indexMax">
    <div class="slider-dots / W-100 flex bC cross-xxs / -Black / index">
        @foreach($arrTile as $_item)
            @component('mod.Slider._wrap.Time.story')
                @slot('loop', $loop->index)
                {!!$_item!!}
            @endcomponent
        @endforeach
    </div>
</div>
{{-- @include('mod.Slider._brick.button.story') --}}