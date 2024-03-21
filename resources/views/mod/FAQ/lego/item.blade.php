<div class="_ef -an {{$css ?? ''}} / Details {{$css_Details ?? ''}} / slug-{{$item->category->slug ?? ''}} slug-{{$item->category->category->slug ?? ''}} {{$item->featured ? 'featured' : ''}} @foreach($item->tags as $param) tag-{{$param->slug}}@endforeach">
    <details>
        <summary class="{{$cssSummary ?? ''}}"><span><span class="Grey">id({!!$item->id!!})</span> {!!$item->name!!}</span><i class="vol-close"></i></summary>
        <div class="_edge net void">
            @include('mod.FAQ.brick.name')
            <div class="x-text / text text-m void">
                {!!$item->text ?? ''!!}
            </div>
        </div>
    </details>
</div>
