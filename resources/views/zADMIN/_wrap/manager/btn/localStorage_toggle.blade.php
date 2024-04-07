@isset($node07041155)
<div class="wrap_btn_{{$css}}">
@else
<div data-localstorage check-localstorage='{{$localstorageName}}' data-check='{{$dataCheck}}' param='active'>
@endisset
    <div data-click data-css data-toggle='{{$css07041155 ?? 'active'}}' data-node='{{$node07041155 ?? 'parent'}}'>
        <div data-click data-css data-node='{{$nodeName}}' data-toggle="{{$toggleCss}}">
            <div class="-Btn x-active / space-s round-xs / pointer selection slim {{$css ?? ''}}" data-click data-localstorage localstorage-name='{{$localstorageName}}' data-toggle="{{$toggleCss}}">
                <span class="content-xxs">{{$name}}</span>
            </div>
        </div>
    </div>
</div>


{{-- <div data-localstorage check-localstorage='{{$localstorageName}}' data-check='{{$dataCheck}}' param='active'>
    <div data-click data-css data-toggle='active' data-node='parent'>
        <div data-click data-css data-node='{{$nodeName}}' data-toggle="{{$toggleCss}}">
            <div class="-Btn x-active / space-s round-xs / pointer selection slim {{$css ?? ''}}" data-click data-localstorage localstorage-name='{{$localstorageName}}' data-toggle="{{$toggleCss}}">
                <span class="content-xxs">{{$name}}</span>
            </div>
        </div>
    </div>
</div> --}}