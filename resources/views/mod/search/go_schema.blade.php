<div itemscope="itemscope" itemtype="https://schema.org/WebSite">
    <meta itemprop="url" content="{{config('AS.url')}}">
    <form class="Form vol-go {{$cssForm ?? '-L / flex / space-s round-s / Jolt -tOn'}}" action="{{$action}}" method="get" target="_self" accept-charset="utf-8" itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction">
        <meta itemprop="target" content="{{config('AS.url')}}search?q={text}">
        <input type="hidden" name="searchid" value="{{$yID}}">
        <input id="input_{{$id_input ?? '2320114'}}" class="_search tel" type="search" name="text" value="{{$_GET['text'] ?? ''}}" placeholder="{{$placeholder ?? 'текст запроса'}}" itemprop="query-input" required="required" name="text">
        <button class="Btn cC -S vol-go" type="submit" aria-label='поиск'>
            <span class="Ico -S none_PC">@svg('search')</span>
            <span class="none_mbl">{{$btnName ?? 'Найти'}}</span>
        </button>
    </form>
</div>
{{-- <div itemscope itemtype="https://schema.org/WebSite">
    <meta itemprop="url" content="{{config('AS.url')}}">
    <form class="Form vol-go {{$cssForm ?? '-L / flex / space-s round-s / Jolt -tOn'}}" action="{{$action}}" method="get" target="_self" accept-charset="utf-8" itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction">
        <meta itemprop="target" content="{{config('AS.url')}}search?searchid=2320114&amp;text={text}">
        <input type="hidden" name="searchid" value="{{$yID}}">
        <input id="input_{{$id_input ?? '2320114'}}" class="_search tel" type="search" name="text" value="{{$_GET['text'] ?? ''}}" placeholder="{{$placeholder ?? 'текст запроса'}}" itemprop="query-input">
        <button class="Btn cC -S vol-go" type="submit" aria-label='поиск'>
            <span class="Ico -S none_PC">@svg('search')</span>
            <span class="none_mbl">{{$btnName ?? 'Найти'}}</span>
        </button>
    </form>
</div> --}}