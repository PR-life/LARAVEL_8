<details class="@include('mod.FAQ.brick.css_details')">
    @include('mod.FAQ.brick.summary')
    <div class="{{$cssWrapContent ?? '_edge'}}">
        <div class="text void">
            @isset($_faq->h1)
                @include('mod.FAQ.brick.name')
                <div class="paragraph"></div>
            @endisset
            {!!$_faq->text!!}
        </div>
    </div>
    @if($_faq->childrenFaqs->count())
        <div class="_children / Details -edge -edge_mbl / {{$css20071946 ?? 'space'}}">
            @foreach($_faq->childrenFaqs as $_faq)
                @include('mod.FAQ.lego.item.def', ['cssSummary' => $css20071915 ?? ''])
            @endforeach
        </div>
    @endif
    <div class="_last"></div>
</details>

 