<details class="{{$css ?? ''}} category-{{$_faq->category->slug ?? ''}} category-{{$_faq->category->category->slug ?? ''}} {{$_faq->featured ? 'featured' : ''}} @foreach($_faq->tags as $param) tag-{{$param->slug}}@endforeach @foreach($_faq->categories as $param) categories-{{$param->slug}}@endforeach">
    <summary class="{{$cssSummary ?? ''}}"><span>{!!$_faq->name!!}</span><i class="vol-close"></i></summary>
    <div class="{{$cssWrapContent ?? '_edge void'}}">
        @include('mod.FAQ.brick.name')
        <div class="x-text / text text-m void">
            {!!$_faq->text ?? ''!!}
        </div>
    </div>
</details>