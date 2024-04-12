@component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
    @slot('name', 'shema_teaser')
    @slot('bd', $item->shema_teaser)
    @slot('param', 'default')
    @slot('id', 'shema_teaser')

    пусто
@endcomponent

@component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
    @slot('name', 'shema_teaser')
    @slot('bd', $item->shema_teaser)
    @slot('param', 'shema-link')
    @slot('id', 'shema_teaser')

    Link
@endcomponent