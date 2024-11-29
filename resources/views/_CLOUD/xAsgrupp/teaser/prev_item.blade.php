@component('_CLOUD.xAsgrupp._wrap.item.index')
    @slot('css16111209','x-border')
    <picture class="_wrap / relative">
        <img class="Abs -t" src="https://asgrupp.ru/{{'/storage/item_images/teaser/square/'.$_item->image}}">
    </picture>

    @component('_wrap._teaser._lego.header.asgrupp')
        @slot('name',$_item->name)
    @endcomponent

    @include('manager.teaser.asgrupp')

    <div class="paragraph"></div>
@endcomponent 