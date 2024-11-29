<div class="_header / Preamble / space-left space-bottomS">
    <div class="paragraph"></div>
    <a class="h -lineHeight / {{$css28111041 ?? 'b500 Ellipsis line-1'}}" href="{!!$link ?? '#'!!}">{!!$name ?? 'name'!!}</a>
    {{-- <div class="44flex 44cI 44bC / 44cross-xs"> --}}
        <span class="content-xs / Grey">арт: {!!$sku ?? 'sku'!!}</span>

        {{-- @if(count($Var->collections))
        <div class="flex">
            <svg class="Ico -S / mr-1 Grey" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2c-4.282 0-6.033.4-6.637 2-.274.725-.073.802.878.526C7.674 4.11 9.585 4 12 4c2.415 0 4.326.11 5.76.526.95.276 1.151.199.877-.526-.604-1.6-2.355-2-6.637-2ZM4.311 7.111C5.202 5.437 7.35 5 12 5s6.798.437 7.689 2.111c.419.788.097 1.056-.625.788-.636-.236-1.348-.4-2.126-.517-1.344-.2-2.98-.27-4.938-.27-1.959 0-3.594.07-4.938.27-.779.116-1.49.281-2.126.517-.722.268-1.044 0-.625-.788Z"></path><path fill="currentColor" d="M12 8c-7.412 0-9 1.059-9 6s1.588 6 9 6 9-1.059 9-6-1.588-6-9-6Z"></path></svg>
            <ul class="-XS / lie">
                @foreach($Var->collections as $_collection)
                <li>{{$_collection->name}}</li>
                @endforeach
            </ul>
        </div>
        @endif --}}

        {{-- <span class="content-xs / Grey">{{$Var->dateAsCarbon->diffForHumans()}}</span> --}}
    {{-- </div> --}}
</div>
