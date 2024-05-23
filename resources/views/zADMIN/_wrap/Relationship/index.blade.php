<div id="wrap_select_{{$id ?? '5555'}}" class="{{$cssSelect ?? 'Select -js vol-withSearch'}} / index relative {{$css ?? 'Form -S'}}">
    <input id="id_checkbox_{{$id ?? '5555'}}" class="_check / none" type="checkbox">

    <label for="id_checkbox_{{$id ?? '5555'}}" class="_close / flex / space-s round-s / Abs -rt / _indexMax">
        <div class="x-close / Ico -XS / none">@svg('close')</div>
        <div class="x-three / Ico -XS">@svg('three')</div>
    </label>
    <div class="flex -wrap / space-xs round-s Grey / noEvents relative">
        <div class="_field W-100 content-xs / {{isset($solo) ? 'x-solo' : 'flex -wrap / cloud cloud-s'}}">
            <span class="space-s block net">{{$placeholder ?? 'выбрать...'}}<span class="ghost">..</span></span>
        </div>
    </div>
    <label for="id_checkbox_{{$id ?? '5555'}}" class="_label {{isset($solo) ? '' : '-border round-s'}} Abs -all / _indexMin / js-close"></label>
    {!!$slot!!}
</div>