@component('_CLOUD.xAsgrupp._wrap.item.collection')
    @slot('link',$link ?? '#')
    @slot('image','/storage/item_images/teaser/portrait/'.$_item->image)
    @slot('prev_p',$_item->prev_p)
    @slot('prev_h',$_item->prev_h1 ?? $_item->name)
@endcomponent

