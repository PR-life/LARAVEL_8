<div class="Name">
    <div class="paragraph"></div>
    <div class="flex sC / padding-04041659 / {{$css ?? ''}}">
        <div class="space-left / -Grey">
            <div class="flex cI / cross-xs">
                @isset($add)
                <a id="btn16070826" class="flex cI cC / Ico -L btn-plus / round-m" href="{{$add}}">
                    <span class="block Ico -XS">
                        @svg('plus')
                    </span>
                </a>
                @else
                <span class="flex cI eC / Ico -L">
                    <span class="Ico">
                        @svg({{$ico}})
                    </span>
                </span>
                @endisset
                <div class="h2 -lineHeight / b100 noEvents">{{$name}}</div>

                <div id="btn16070829" class="pointer" check-localstorage='trigger_model_{{$Model}}' data-check='active' param='on'>
                    <div data-click data-css data-toggle='on' data-node='parent'>
                    <div data-click data-css data-toggle='triggerGap' data-node='trigger_table_index'>
                    <div data-click data-css data-toggle='blockManager' data-node='filter_tags_1_jsId'>
                        <div data-click data-toggle='active' data-localstorage localstorage-name='trigger_model_{{$Model}}'>
                            <div class="_btn / noEvents space-s round-xs">
                                <div class="Ico -XS">
                                    @svg('filterStatus')
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="paragraph"></div>
</div>
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