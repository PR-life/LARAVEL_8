<details class="{{$css_wrap_details_14061213 ?? ''}} category-{{$_faq->category->slug ?? ''}} category-{{$_faq->category->category->slug ?? ''}} {{$_faq->featured ? 'featured' : ''}} @foreach($_faq->tags as $param) tag-{{$param->slug}}@endforeach @foreach($_faq->categories as $param) categories-{{$param->slug}}@endforeach">
    <summary class="{{$cssSummary ?? ''}}"><span>{!!$_faq->name!!}</span><i class="vol-close"></i></summary>
    <div class="{{$cssWrapContent ?? '_edge void'}}">
        <div>
            @include('mod.FAQ.brick.name')
            @isset($_faq->text)
                @isset($_faq->h1)
                <div class="paragraphX2"></div>
                @endisset
            <div class="x-text / text text-m void">
                {!!$_faq->text!!}
            </div>
            @endisset
        </div>
    </div>
    @if($_faq->childrenFaqs->count())
        <div class="_children / Details -edge -edge_mbl">
            @foreach($_faq->childrenFaqs as $_faq)
                @include('mod.FAQ.lego.item.def', ['cssSummary' => '-S'])
            @endforeach
        </div>
    @endif
</details>