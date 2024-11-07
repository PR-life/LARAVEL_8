<div class="slider-dot W-100 / Time / pointer index {{$loop == 0 ? 'active' : ''}}" data-item='{{$loop + 1}}'>
    <div class="paragraph"></div>
    <div class="noEvents content-s / Ellipsis line-1">
        {!!$slot!!}
    </div>
    <div class="paragraph"></div>
    <div class="_line noEvents"></div>
</div>