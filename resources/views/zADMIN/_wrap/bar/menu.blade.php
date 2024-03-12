<div id="{{$id}}" class="mxat-transition {{$css ?? ''}} / OnOff" data-click data-css data-toggle='on' data-localstorage localstorage-id> 
    {!!$name!!}
    <div class="_open" data-stopclick>
        {!!$slot!!}
    </div>
</div>