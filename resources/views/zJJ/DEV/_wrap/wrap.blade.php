<div id="toolMenu_{{$id}}" class="OnOff / -Black Black -bg / / {{$css ?? ''}} index [ margin top XS ]" data-click data-css data-toggle='on' data-localstorage localstorage-id>
    @include('zJJ.DEV._brick.Close')
    <div class="_open space" data-stopclick>
        <div class="space-left">
            <div class="paragraph-s"></div>
            <div class="Pente aura / Golden -left_70 / bC">
                {!!$slot!!}
            </div>
            <div class="paragraph"></div>
        </div>
    </div>
</div>