<div itemscope="itemscope" itemtype="https://schema.org/WebSite">
    <meta itemprop="url" content="{{config('AS.url')}}">
    <form class="Form vol-go {{$cssForm ?? '-L / flex / space-s round-s / Jolt -tOn'}} yesEvents" action="{{$action}}" method="get" target="_self" accept-charset="utf-8" itemprop="potentialAction" itemscope itemtype="https://schema.org/SearchAction">
        <meta itemprop="target" content="{{config('AS.url')}}search?q={text}">
        <input type="hidden" name="searchid" value="{{$yID}}">
        <input id="input_{{$id_input ?? '2320114'}}" class="_search tel" type="search" name="text" value="{{$_GET['text'] ?? ''}}" placeholder="{{$placeholder ?? 'что ищем'}}" itemprop="query-input" required="required">
        <button class="Btn cC -S vol-go" type="submit" aria-label='поиск'>
            <span class="Ico -S none_PC">@svg('search')</span>
            <span class="none_mbl">{{$btnName ?? 'Найти'}}</span>
        </button>
    </form>
</div>