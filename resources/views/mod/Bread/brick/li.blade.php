@foreach ($breadcrumbs as $breadcrumb)
<li class="x-{{$breadcrumb['slug']}}">
    @if(isset($breadcrumb['url']))
        <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
    @else
        {{ $breadcrumb['name'] }}
    @endif
</li>
@endforeach