@component('zADMIN._wrap.Relationship.index', ['id' => $id ?? 'item_surrogate', 'solo' => true])
@slot('placeholder', 'выбрать item...')
<select class="_select / relative" name="item_surrogate_id">
    {{$slot}}
</select>
@endcomponent