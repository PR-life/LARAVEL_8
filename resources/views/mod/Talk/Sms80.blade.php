<div id="Sms_13041005" class="Sms -w -wMin / Talk -w80 {{$css_wrap_14061200 ?? ''}} / Bone / index relative">
    <div class="padding top / stop_80"></div>
    <div class="I Edge -PC / stop_80">
        @include('manager.scroll.Name.left', ['name_mbl' => $name_Roll ?? null, 'name' => $name ?? null])
        {{-- <div class="h">{{$name_Roll ?? $name}}</div> --}}
    </div>
    <div class="_head space content / none_80">
        <em>{{$name}}</em>
    </div>
    <div class="Scroll_80">
        <div class="_scr">
            <div class="_body / Chat -entropy / Entropy / Roll_80 -edge -space -scrollBar / cross void-m" data-scroll>
                @foreach($Var as $item)
                    @include('_assembling.wagon.sms',['Var' => $item, 'cssPreamble' => 'flex cI cross-xxs / block_80', 'css' => $cssWagon ?? null])
                @endforeach
                <div class="Wagon -w -wL -hS / _last">
                    <div class="Btn dC cC / round" data-click data-goto='milk_formAsk' data-foo='click'>
                       <svg><use xlink:href="#svg-plus"></use></svg>
                      <div class="paragraph-s"></div>
                       <span>задать вопрос</span>
                    </div>
                 </div>
                <div class="Gstrm"></div>
            </div>
        </div>
    </div>
    <div class="_footer space flex cI cC / none_80">
        @include('mod.Talk._brick.btnPlus') 
    </div>
</div>

@push('js-bottom-solo')
<script>
	document.addEventListener('DOMContentLoaded', function () {
		new ScrollLeft('Sms_13041005')
	});
</script>
@endpush