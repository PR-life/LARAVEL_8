<li {!!request()->routeIs($link) ? 'class="active"' : ''!!}>
    <a class="Ellipsis block" href="{{route($link)}}"><span class="nowrap">{{$slot}}</span></a>
</li>