@push('style')
	{{-- .about > .Ef.-Details > ._ef.slug-detektivnoe-agentstvo,
	.price > .Ef.-Details > ._ef.tag-price,
	.profession > .Ef.-Details > ._ef.slug-detektiv  {
		height: auto;
		min-height: var(--x-Ef-hMin);
		opacity: 1;
		pointer-events: all;
	} --}}
@endpush

<div class="{!!$css_wrap_menu ?? ''!!}">
    <div class="paragraph / none_PC"></div>
    <div>
        <ul class="menu -tag {{$css_menu ?? '-roundS edge-left'}} / flex -wrap cloud / Pointer" data-click data-switch data-package="{{$id_package}}" data-stop>
           {!!$menu_li!!}
           <li class="gstrm"></li>
       </ul>
    </div>
</div>

<div class="paragraph / none_mbl"></div>

<div class="{{$css_wrap_content ?? 'I aura / Edge -SPC'}}">
	<div id="{{$id_package}}" class="{{$id_package_css ?? 'all first'}}">
		<div class="Ef -list -first / -Details">
            @foreach($Var as $item)
                @if($loop->first)
                    @include('mod.FAQ.lego.item',['css' => '-first'])
                @endif
                @include('mod.FAQ.lego.item',['css' => 'x-'.$loop->iteration])
             @endforeach
		</div>
	</div>
</div>
<div class="margin top S / none_PC"></div>