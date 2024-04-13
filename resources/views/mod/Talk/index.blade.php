<div id="wrap_{{$id ?? 'Talk'}}" class="Talk {{$css ?? '-def'}}">

    <div class="I aura / Edge -SPC edge">
         @include('manager.Name.scroll_left')
     </div>
     

     <div class="_wrap / relative">
        <div class="Roll_mbl Roll_PC {{$cssRoll ?? '-edge -space -scrollBar cross'}}" data-scroll>
            @foreach($Var as $item)
                @include('_assembling.wagon_TalkQA',['Var' => $item, 'cssPreamble3' => 'flex cI cross-xxs / block_80'])
            @endforeach
            <div class="Wagon -w -wL -hS / _last">
               <div class="Btn dC cC / round" data-click data-goto='milk_formAsk' data-foo='click'>
                  @svg('plus')
                 <div class="paragraph-s"></div>
                  <span>задать вопрос</span>
               </div>
            </div>
            <div class="Gstrm"></div>
        </div>
        <div class="none_mbl [ margin top S ]"></div>
        <div class="none_mbl Grad / _indexMin"></div>
        <div class="Veil vol-white">
            <div class="_bottom"></div>
        </div>
     </div>

</div>
