<div id="wrap_{{$id ?? 'Talk'}}" class="Talk {{$css ?? '-def'}}">

    <div class="I aura / Edge -SPC edge">
        <div class="flex cI bC_mbl / cross">
           <span class="h b500">
              <span class="ghostMbl c-h">
              {!!$name ?? 'Новые вопросы <br class="none_PC">от клиентов'!!}
              </span>
              <div class="Wings Wings-mbl none_PC">
                 <div class="_win -t">
                    {!!$name_mbl ?? '<span class="h b500 c-h">Новые вопросы <br class="none_PC">от клиентов</span>'!!}                        
                    <div class="paragraph"></div>
                 </div>
              </div>
           </span>
           <div class="flex cross-xxs / Nav -nex / ">
              <div class="_btn left / _wrap rotate-l / Ico -L / relative pointer noEventsAll highlight ">
                 <span class="_border Abs"></span>
                 <span class="_field Abs / flex cI cC">
                 <span class="_line first"></span>
                 <span class="_line last"></span>
                 </span>
              </div>
              <div class="_btn right / _wrap rotate-r / Ico -L / relative pointer noEventsAll highlight ">
                 <span class="_border Abs"></span>
                 <span class="_field Abs / flex cI cC">
                 <span class="_line first"></span>
                 <span class="_line last"></span>
                 </span>
              </div>
           </div>
        </div>
     </div>
     

     <div class="_wrap / relative">
        <div class="Roll_mbl Roll_PC {{$cssRoll ?? '-edge -space -scrollBar cross'}}">
            @foreach($Var as $item)
                @include('_assembling.wagon_TalkQA',['Var' => $item, 'cssPreamble3' => 'flex cI cross-xxs / block_80'])
            @endforeach
            <div class="Wagon -w -wL -hS">
               <div class="Btn dC cC / round">
                  @svg('plusDt')
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

 