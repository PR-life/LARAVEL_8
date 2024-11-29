@component('_CLOUD.xAsgrupp._wrap.item.collectionS')
    @slot('image',$_item->image_prev)
    @slot('prev_p',$_item->prev_p)
    @slot('prev_h',$_item->prev_h1 ?? $_item->prev_h2 ?? null)
@endcomponent