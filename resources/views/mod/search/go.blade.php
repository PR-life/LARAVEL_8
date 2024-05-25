<div itemscope itemtype="https://schema.org/WebSite">
    <link itemprop="url" href="{{config('AS.url')}}">
    <form class="Form vol-go {{$cssForm ?? '-M / flex / space-s round-s / Jolt -tOn'}}" action="{{$action}}" method="get" target="_self" accept-charset="utf-8">
        {{-- <meta content="{{$metaUrl}}"> --}}
        <input type="hidden" name="searchid" value="{{$yID}}">
        <input id="input_{{$id_input ?? '2320114'}}" class="_search tel" type="search" name="text" value="{{$_GET['text'] ?? ''}}" placeholder="{{$placeholder ?? 'текст запроса'}}">
        <button class="Btn cC -S vol-go" type="submit" aria-label='поиск'>
            <span class="Ico -S none_PC">@svg('search')</span>
            <span class="none_mbl">{{$btnName ?? 'Найти'}}</span>
        </button>
    </form>
</div>
