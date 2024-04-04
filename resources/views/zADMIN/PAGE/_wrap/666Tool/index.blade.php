<div id="{{$id}}" class="OnOff {{$css ?? ''}}" data-click data-css data-toggle='on' data-localstorage localstorage-id>

    <div class="flex bC / pointer">
        <div class="content"><span class="noEvents slctn">{{$name}}</span></div>
        @include('zADMIN._brick.manager.edit.changeTool')
    </div>

    <div class="_open" data-stopClick>
        <div class="paragraph-s"></div>
        <div class="space round-s x-24051434 / void-s">

            {!!$slot!!}

        </div>
    </div>
</div>