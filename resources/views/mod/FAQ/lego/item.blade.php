<div class="_ef -an {{$css ?? ''}} / Details {{$css_Details ?? ''}} / slug-{{$item->category->slug ?? ''}} slug-{{$item->category->category->slug ?? ''}} {{$item->featured ? 'featured' : ''}} @foreach($item->tags as $param) tag-{{$param->slug}}@endforeach">
    <details>
        <summary class="{{$cssSummary ?? ''}}"><span><span class="Grey">id({!!$item->id!!})</span> {!!$item->name!!}</span><i></i></summary>
        <div class="_edge text void net">
            @include('mod.FAQ.brick.name')
        </div>
    </details>
</div>
