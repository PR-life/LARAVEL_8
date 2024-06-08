<div class="_ef -an {{$css ?? ''}} / Details {{$css_Details ?? ''}} / category-{{$_faq->category->slug ?? ''}} category-{{$_faq->category->category->slug ?? ''}} {{$_faq->featured ? 'featured' : ''}} @foreach($_faq->tags as $param) tag-{{$param->slug}}@endforeach @foreach($_faq->categories as $param) category-{{$param->slug}}@endforeach">
    <details class="_details" itemprop="mainEntity" itemscope itemtype="http://schema.org/Question">
        <summary class="{{$cssSummary ?? ''}}"><span itemprop="name">{!!$_faq->name!!}</span><i class="vol-close"></i></summary>
        <div class="_edge net void">
            @include('mod.FAQ.brick.name')
            <div class="x-text" itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
                <div class="text text-m void" itemprop="text">
                    {!!$_faq->text ?? ''!!}
                </div>
            </div>
        </div>
    </details>
</div>


{{-- <details itemprop="mainEntity" itemscope="itemscope" itemtype="http://schema.org/Question"> <summary itemprop="name"><em>Адвокатские коллегии</em><i></i></summary>
    <div class="_L" itemscope="itemscope" itemprop="acceptedAnswer" itemtype="http://schema.org/Answer">
    <div class="_l" itemprop="text">
    <p>Поиск доказательств по уголовным и гражданским делам. <a href="/detektivnoe-agentstvo/sodejstvie-advokatam">Условия работы</a></p>
    </div>
    </div>
    </details> --}}