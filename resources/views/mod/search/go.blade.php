<div itemscope itemtype="https://schema.org/WebSite">
    <link itemprop="url" href="{{env('APP_URL')}}">


    <form class="Form vol-go {{$cssForm ?? '-M / flex / space-s round-s / Jolt -tOn'}}" action="{{route('dt.search')}}" method="get" target="_self" accept-charset="utf-8">
        <meta content="{{$metaUrl}}">
        <input type="hidden" name="searchid" value="{{$yID}}">
        <input id="input_{{$yID}}" class="_search" type="search" name="text" value="{{$_GET['text'] ?? ''}}" placeholder="{{$placeholder ?? 'текст запроса'}}">
        <button class="Btn cC -S vol-go" type="submit">
            <span class="Ico -S none_PC">@svg('search')</span>
            <span class="none_mbl">{{$btnName ?? 'Найти'}}</span>
        </button>
    </form>
    {{-- <form class="Form -go {{$cssForm ?? '-M / jolt'}}" action="https://dtornado.ru/search/" method="get" target="_self" accept-charset="utf-8" itemprop="potentialAction" itemscope="itemscope" itemtype="https://schema.org/SearchAction">
        <meta itemprop="target" content="https://dtornado.ru/search?searchid=2320114&amp;text={text}">
        <input type="hidden" name="searchid" value="2320114">
        <input id="flash-poisk" class="_win" type="search" name="text" value="" autocomplete="off" itemprop="query-input">
        <input class="_go" type="submit" value="Найти">
    </form> --}}
</div>
