<div class="{{$css_wrap_content ?? 'I aura / Edge -SPC'}}" itemscope itemtype="https://schema.org/FAQPage">
    <meta itemprop="name" content="Часто задаваемые вопросы">
	<div class="all">
		<div class="Ef -list / -Details">
            @foreach($Var as $_faq)
                @include('mod.FAQ.lego.item.ef',['css' => 'x-'.$loop->iteration])
             @endforeach
		</div>
	</div>
</div>
<div class="margin top S / none_PC"></div>