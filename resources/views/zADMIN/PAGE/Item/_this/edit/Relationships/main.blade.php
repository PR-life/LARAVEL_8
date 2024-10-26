<div class="Min -w5 / wrap-relationship -solo / round">
    @include('zADMIN._wrap.select.name',['Var' => 'СТИЛЬ'])
    @component('zADMIN._wrap.select.xStyle.index')
        @include('_._brick.select.tag.edit.index',['Tags' => $tagsStyle ?? [], 'Var' => $item->style_id])
    @endcomponent
</div>