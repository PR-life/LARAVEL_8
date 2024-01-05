<div id="{{$id}}" class="mxat-transition / OnOff" data-click data-css data-toggle='on' data-localStorage localStorage-id>
    <div class="flex cI / pointer / x-left">
        @component('zADMIN._wrap.Aside.left.div')
            <div class="Ico -S">
                {!!$svg!!}
            </div>
            <div class="_x"></div>
        @endcomponent
        <span class="_item / content-s" style="letter-spacing: .25px">{{$name}}</span>
    </div>
    <div class="_open" data-stopClick>
        <div class="paragraph"></div>
        {{-- <div class="void"> --}}
            {!!$slot!!}
        {{-- </div> --}}
    </div>
</div>