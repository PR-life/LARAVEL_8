<li class="{{isset($open) ? 'open' : ''}}">
    <span class="a lvl-{{$lvl ?? ''}}" data-click data-css data-toggle='open' data-node='parent'>{!!$name!!}</span>
    {!!$slot!!}
</li>