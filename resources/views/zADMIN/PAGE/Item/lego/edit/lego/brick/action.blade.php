@component('zADMIN._wrap.menu.tile.radio')
@slot('name', 'action')
@slot('id', 'action_default')
@slot('param', $item->action)
@slot('value', '')

пусто
@endcomponent
@component('zADMIN._wrap.menu.tile.radio')
@slot('name', 'action')
@slot('id', 'action_check')
@slot('param', $item->action)
@slot('value', 'check')

Проверить
@endcomponent
@component('zADMIN._wrap.menu.tile.radio')
@slot('name', 'action')
@slot('id', 'action_find')
@slot('param', $item->action)
@slot('value', 'find')

Найти
@endcomponent