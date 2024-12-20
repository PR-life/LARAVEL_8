<div class="Abs -lt -r space-s / Pause / _indexMax">
    <div class="slider-dots / W-100 flex bC cross-xxs / -Black / index">
        @foreach($arrTile as $key => $_item)
            @component('mod.Slider._wrap.Time.story')
                @slot('id', $id)
                @slot('loop', $loop->index)
                @slot('param', $_item)
                {!! $key !!}
            @endcomponent
        @endforeach
    </div>
</div>
@include('mod.Slider._brick.button.story')

<div class="Abs -rb / yesEvents / _indexMax" data-stopClick>
    <div class="-Stories / pointer" data-click data-css closest='.Slider' data-toggle='pause-on'>
        <div class="_pause / Ico -M flex cI cC / contentBox / space-m / noEvents">
            <div class="x-play">@svg('pause')</div>
            <div class="x-pause none">@svg('play')</div>
        </div>
    </div>
</div>