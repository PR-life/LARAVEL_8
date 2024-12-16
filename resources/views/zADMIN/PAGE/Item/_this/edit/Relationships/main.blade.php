<div class="Min -w5 / wrap-relationship -solo / round">
    @include('zADMIN._wrap.select.name',['Var' => 'СТИЛЬ'])
    @component('zADMIN._wrap.select.xStyle.index')
        @include('_._brick.select.tag.edit.index',['Tags' => $tagsStyle ?? [], 'Var' => $item->style_id])
    @endcomponent
</div>

<div class="Min -w5">
    @include('zADMIN._wrap.select.name',['Var' => 'Features'])
    @component('zADMIN._wrap.select.features.index')
        @include('_._brick.select.features.edit.index',['Features' => $features, 'arr' => $item->features->pluck('id')->toArray()])
    @endcomponent
</div>