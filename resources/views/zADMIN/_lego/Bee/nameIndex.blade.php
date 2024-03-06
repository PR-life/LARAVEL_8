<div class="paragraph"></div>
<div class="flex sC / x-name-index / {{$css ?? ''}}">
    <div class="space-left / -Grey">
        <div class="flex cI / cross-xs">
            @isset($add)
                <a class="flex cI cC / Ico -L btn-plus / round-m" href="{{$add}}">
                    <span class="block Ico -XS">
                        @svg('plus')
                        {{-- @svg({{$ico}}) --}}
                    </span>
                </a>
            @endisset
            <div class="h2 -lineHeight / b100 noEvents">{{$name}}</div>
        </div>
    </div>
</div>
<div class="paragraphX2"></div>
{{-- <div class="flex sC / x-name-index / {{$css ?? ''}}">
    <div class="space-left / -Grey">
        <div class="flex cI">
            <div class="Ico -S / mr-2">
                @svg({{$ico}})
            </div>
            <div class="h2 -lineHeight / b100 noEvents">{{$name}}</div>
            @isset($add)
                <div class="content ghost">__</div>
                <a class="space-xs / flex cC cI / Ico -XS / btn-plus / contentBox" href="{{$add}}">@svg('plus')</a>
            @endisset
        </div>
    </div>
</div> --}}