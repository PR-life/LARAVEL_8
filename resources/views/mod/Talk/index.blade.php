<section id="wrap_{{$id ?? 'Talk'}}" class="Talk {{$css_25041630 ?? 'vol-def'}}" itemscope itemtype="https://schema.org/Comment">
    <h2 class="none" itemprop="name">отвечаем на вопросы</h2>
    <div class="I aura / Edge -SPC edge">
         @include('manager.scroll.Name.left',['name' => 'Оперативно решаем вопросы клиентов'])
         {{-- Как решаем вопросы клиентов --}}
     </div>
     <div class="_wrap / relative">
        <div class="Roll_mbl Roll_PC {{$cssRoll ?? '-edge -scrollBar -space / cross'}} [ padding bottom ]" data-scroll>
            @foreach($Var as $item)
                @include('_assembling.wagon.sms',['Var' => $item])
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
        {!!$slot ?? ''!!}
        <div class="none_mbl [ margin top S ]"></div>
        <div class="none_mbl Grad / _indexMin"></div>
        <div class="Veil {{$cssVeil ?? 'vol-white'}}">
            <div class="_bottom"></div>
        </div>
     </div>
</section>
