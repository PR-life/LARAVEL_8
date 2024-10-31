<div class="flex cI bC_mbl / cross">
<div class="W-100">
      <span class="ghostMbl {{$css29061211 ?? ''}} / h b500">
         {!!$name29061211 ?? 'Популярные вопросы'!!}
      </span>
      <div class="Wings Wings_mbl none_PC">
         <div class="_win -t">
            <span class="block / h b500 edge-left">{!!$nameMbl29061211 ?? 'Новые вопросы'!!}  </span>
             <div class="paragraph"></div>
          </div>
       </div>
    </div>
    <div class="flex cross-xxs / Nav vol-{{$vol29061211 ?? 'nex'}} / edge-rightS">
        @include($pathBtnLeft29061211 ?? '_brick.btn.scroll.left.index')
        @include($pathBtnRight29061211 ?? '_brick.btn.scroll.right.index')
    </div>
</div>