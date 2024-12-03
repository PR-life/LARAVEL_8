<div id="{{$id ?? 'map_preview'}}" class="Max -w5 / round shadow hidden / relative pointer" data-click data-goto='{{$goto ?? 'milk_map'}}' data-foo='click' corrector-jsscroll='100' onclick="ym({{config('AS.yandex_metrika_id')}},'reachGoal',$reachGoalName ?? 'click_btn_openMap')">
    <img src="{{$img ?? '/images-0/map/ava.png'}}" alt="открыть карту">
    <div class="Veil">
        <div class="_bottom"></div>
    </div>
    <div class="Abs -all / Bone space / -Black">
        <div></div>
        <div class="flex">
            @svg('geo')
            <div class="ml-2 / content c-h">посмотреть на карте</div>
        </div>
    </div>
</div>
<div class="paragraph"></div>