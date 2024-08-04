<div class="{{$css04081325 ?? ''}}">
    <div class="flex cI / cross-xxs">
        <div class="Ava" style="{!!$ava!!}"></div>
        <div class="flex dC">
            <div class="content">{{$name}}</div>
            <div class="flex cI / cross-xxs">
                <div class="Ico -XS">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill="#ffcc00" d="M8 12.847L3.803 15.4a.65.65 0 01-.97-.705l1.13-4.78L.24 6.711a.65.65 0 01.37-1.141l4.896-.402L7.4.637a.65.65 0 011.2 0l1.895 4.532 4.896.402a.65.65 0 01.37 1.14l-3.724 3.203 1.13 4.78a.65.65 0 01-.97.706L8 12.847z"/></svg>
                </div>
                <div class="hMin / b600">{{$estimation}}</div>
                @isset($date)
                <div class="content-xs / Grey">• {{$date}}</div>
                @endisset
            </div>
        </div>
    </div>
    <div class="paragraph"></div>
    <div class="content A / Void / lineClamp -padding var-3 owl-lineClamp / pointer" data-click data-css data-toggle='On'>
        <p>{!!$slot!!}</p>
    </div>
</div>