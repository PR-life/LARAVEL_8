@push('style')
	.training > .Ef.-Details > ._ef.training,
	.equipment > .Ef.-Details > ._ef.equipment,
	.sensitiv > .Ef.-Details > ._ef.sensitiv {
		height: auto;
		min-height: var(--x-Ef-hMin);
		opacity: 1;
		pointer-events: all;
	}
@endpush



<div class="{!!$css_wrap_menu ?? ''!!}">
    <div class="paragraph / none_PC"></div>
    <div>
        <ul class="menu -tag {{$css_menu ?? '-roundS'}} / flex -wrap cloud / Pointer / edge-left" data-click data-switch data-package="{{$id_package}}" data-stop>
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
                    <div class="_ef -an -first / Details {{$css_Details ?? ''}} / {{$item->category->slug ?? ''}} {{$item->category->category->slug ?? ''}} {{$item->featured ? 'featured' : ''}}">
                        <details>
                            <summary class="-M"><span>{!!$item->name!!}</span><i></i></summary>
                            <div class="_edge text void net">
                                @include('mod.FAQ._lego.content')
                            </div>
                        </details>
                    </div>
                @endif
                    <div class="_ef -an x-{{$loop->iteration}} / Details {{$css_Details ?? ''}} / {{$item->category->slug ?? ''}} {{$item->category->category->slug ?? ''}} {{$item->featured ? 'featured' : ''}}">
                       <details>
                           <summary class="-M"><span>{!!$item->name!!}</span><i></i></summary>
                           <div class="_edge text void net">
                               @include('mod.FAQ._lego.content')
                           </div>
                       </details>
                   </div>
               @endforeach


               @isset($thisItemFaq)
                @foreach($thisItemFaq as $thisFaq)
                    <div class="_ef -an thisItem / Details {{$css_Details ?? ''}}">
                        <details>
                            <summary><span>{!!$thisFaq->name!!}</span><i></i></summary>
                            <div class="_edge text void net">
                                @include('mod.FAQ._lego.content')
                            </div>
                        </details>
                    </div>
                @endforeach
                @endisset

		</div>
	</div>
</div>
<div class="margin top S / none_PC"></div>
