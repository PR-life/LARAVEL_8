<li class="{{$css07060748 ?? ''}}" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
    @isset($href)
    <a itemprop="item" href="{{$href}}" title="{{$title ?? ''}}">
        <span itemprop="name">{{$name}}</span>
    </a>
    @else
    <a class="_last noEvents" itemprop="item" href="{{url()->current()}}" title="{{$title ?? ''}}">
        <span itemprop="name">{{$name}}</span>
    </a>
    @endisset
    <meta itemprop="position" content="{{$loop}}">
</li>