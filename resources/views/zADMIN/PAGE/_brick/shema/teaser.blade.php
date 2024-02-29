@component('zADMIN.PAGE._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
@slot('name', 'shema_teaser')
@slot('id', 'shema_teaser_def')
@slot('param', $item->shema_teaser)
@slot('value', 'default')

пусто
@endcomponent

@component('zADMIN.PAGE._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
@slot('name', 'shema_teaser')
@slot('id', 'shema_teaser_link')
@slot('param', $item->shema_teaser)
@slot('value', 'shema-link')

Link
@endcomponent