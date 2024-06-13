@component('zADMIN._wrap.Relationship.index', ['id' => $id ?? 'item', 'solo' => true])
@slot('placeholder', 'выбрать item...')
<select class="_select / relative" name="item_id">
    {{$slot}}
</select>
@endcomponent