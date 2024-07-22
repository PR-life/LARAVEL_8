<details class="@include('mod.FAQ.brick.css_details')" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
    @include('mod.FAQ.brick.summary_schema')
    <div class="{{$cssWrapContent ?? '_edge void'}}" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <div itemprop="text">
            @include('mod.FAQ.brick.name_schema')
            <div class="x-text / text void">
                {!!$_faq->text ?? ''!!}
            </div>
        </div>
    </div>
    @if($_faq->childrenFaqs->count())
        <div class="_children / Details -edge -edge_mbl / {{$css20071946 ?? 'space'}}">
            @foreach($_faq->childrenFaqs as $_faq)
                @include('mod.FAQ.lego.item.def_schema', ['cssSummary' => ''])
            @endforeach
        </div>
    @endif
    <div class="_last"></div>
</details>