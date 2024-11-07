<div class="_ef -an {{$css ?? ''}} / 
    Details {{$css_Details ?? ''}} / 
    category-{{$_faq->category->slug ?? ''}} 
    category-{{$_faq->category->category->slug ?? ''}} 
    {{$_faq->featured ? 'featured' : ''}} 
    {{$_faq->tag_id ? 'tag-'.$_faq->tag->slug : ''}} 
    @foreach($_faq->tags as $param) tag-{{$param->slug}}@endforeach 
    @foreach($_faq->categories as $param) category-{{$param->slug}}@endforeach
">
    <details class="_details" itemprop="mainEntity" itemscope itemtype="http://schema.org/Question">
        @include('mod.FAQ.brick.summary_schema')
        <div class="_edge net void">
            @include('mod.FAQ.brick.name')
            <div class="x-text" itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
                <div class="text void" itemprop="text">
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
</div>