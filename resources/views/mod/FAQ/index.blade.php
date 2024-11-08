@push('style')
	{{--
	.555555 > .Ef.-Details > ._ef.slug-555555  {
		height: auto;
		min-height: var(--x-Ef-hMin);
		opacity: 1;
		pointer-events: all;
	} --}}
@endpush

@isset($menu_li)
<div class="{!!$css_menu_wrap ?? ''!!}" itemscope itemtype="https://schema.org/WPSideBar">
    <meta itemprop="name" content="навигация по FAQ">
    <div role="navigation" aria-label="навигация по FAQ">
        <ul class="menu -tag {{$css_menu ?? '-roundS edge-left'}} / flex -wrap cloud / Pointer" data-click data-switch data-package="{{$id_package}}" data-stop>
           {!!$menu_li!!}
           <li class="gstrm"></li>
       </ul>
    </div>
</div>
@endisset
<div class="paragraph / none_mbl"></div>

<div class="{{$css_wrap_content ?? 'I aura / Edge -SPC'}}" itemscope itemtype="https://schema.org/FAQPage">
    <meta itemprop="name" content="Часто задаваемые вопросы">
	<div id="{{$id_package}}" class="{{$id_package_css ?? 'all first'}}">
		<div class="Ef -list -first / -Details">
            @foreach($Var as $_faq)
                @if($loop->first)
                    @include('mod.FAQ.lego.item.ef',['css' => '-first'])
                @endif
                @include('mod.FAQ.lego.item.ef',['css' => 'x-'.$loop->iteration])
             @endforeach
		</div>
	</div>
</div>
<div class="margin top S / none_PC"></div>