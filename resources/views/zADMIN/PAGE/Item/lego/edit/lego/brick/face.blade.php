@component('zADMIN._wrap.menu.tile.radio')
@slot('name', 'face')
@slot('id', 'face_default')
@slot('param', $item->face)
@slot('value', '')

все
@endcomponent

@component('zADMIN._wrap.menu.tile.radio')
@slot('name', 'face')
@slot('id', 'face_person')
@slot('param', $item->face)
@slot('value', 'person')

Физ. лицо
@endcomponent

@component('zADMIN._wrap.menu.tile.radio')
@slot('name', 'face')
@slot('id', 'face_business')
@slot('param', $item->face)
@slot('value', 'business')

Юр. лицо
@endcomponent