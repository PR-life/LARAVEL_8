<div data-localstorage check-localstorage='{{$localstorageName}}' data-check='active'>
    <div data-click data-css data-toggle='active' data-node='parent'>
        <div data-click data-css data-node='{{$nodeName}}' data-toggle="{{$toggleCss}}">
            <div class="{{$css ?? 'space-s round-xs _btn / selection pointer'}}" data-click data-localstorage localstorage-name='{{$localstorageName}}' data-toggle="{{$toggleCss}}">
                <span class="content-xxs">{{$name}}</span>
            </div>
        </div>
    </div>
</div>