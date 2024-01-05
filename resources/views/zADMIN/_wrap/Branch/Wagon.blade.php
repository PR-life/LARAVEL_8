<div id="item_{{$id}}" class="Wagon dC / space round relative">
    <div class="flex bC">
        <div class="content-s / b600">{{$name}}</div>
        @isset($BadgeName)
        <div class="Badge -S -net -reverseBg {{$BadgeCss ?? ''}}">
            <div class="net">{{$BadgeName}}</div>
        </div>
        @endisset
    </div>
    <div class="_line"></div>
    <div class="hill-s / content-xs -lineHeight">{{$description}}</div>

    <a class="Abs -all" href="{{$link}}"></a>
</div>

 