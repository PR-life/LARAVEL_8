<div class="flex sC / x-name-index / {{$css ?? 'Bee55'}}">
    <div class="space-left / -Grey">
        <div class="flex cI">
            <div class="Ico -S / mr-2">
                @svg({{$ico}})
            </div>
            <div class="h2 -lineHeight / b100 noEvents">{{$name}}</div>
            @isset($add)
                <div class="content ghost">__</div>
                <a class="space-xs / flex cC cI / Ico -XS / x-btn-plus / contentBox" href="{{$add}}">@svg('plus')</a>
            @endisset
        </div>
    </div>
</div>