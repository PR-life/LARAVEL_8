{{-- <div itemscope itemtype="https://schema.org/WebSite">
    <link itemprop="url" href="{{config('AS.url')}}">
    <form class="Form vol-go {{$cssForm ?? '-M / flex / space-s round-s / Jolt -tOn'}}" action="{{$action}}" method="get" target="_self" accept-charset="utf-8">
        <input type="hidden" name="searchid" value="{{$yID}}">
        <input id="input_{{$id_input ?? '2320114'}}" class="_search tel" type="search" name="text" value="{{$_GET['text'] ?? ''}}" placeholder="{{$placeholder ?? 'текст запроса'}}">
        <button class="Btn cC -S vol-go" type="submit" aria-label='поиск'>
            <span class="Ico -S none_PC">@svg('search')</span>
            <span class="none_mbl">{{$btnName ?? 'Найти'}}</span>
        </button>
    </form>
</div> --}}

<div>
    <form class="Form vol-go / relative {{$cssForm ?? '-L / space-s round-s / Jolt -tOn'}} " action="{{$action}}" method="get" target="_self" accept-charset="utf-8">
        {{-- <meta content="{{$metaUrl}}"> --}}
        <input type="hidden" name="searchid" value="{{$yID}}">
        <input id="input_{{$id_input ?? '2320114'}}" class="_search" type="search" name="text" value="{{$_GET['text'] ?? ''}}" placeholder="{{$placeholder ?? 'текст запроса'}}">

        @switch($button ?? null)
            @case(1)
                
                @break
            @case(2)
                
                @break
            @default
            <div class="Abs -rt -b / flex cI / space-s">
                <button class="Btn cC vol-circul" type="submit" aria-label='поиск'>
                    <svg class="Ico -XS" viewBox="0 0 50 50">
                        <path fill="currentColor" d="M40.76,25.24L16,50l-6.75-6.75L27.49,25,9.24,6.75,16,0l24.76,24.76-.24,.24,.24,.24Z"></path>
                    </svg>
                </button>
            </div>
            {{-- <button class="Btn cC -S vol-go" type="submit" aria-label='поиск'>
                <span class="Ico -S none_PC">@svg('search')</span>
                <span class="none_mbl">{{$btnName ?? 'Найти'}}</span>
            </button> --}}
        @endswitch
    </form>
</div>
