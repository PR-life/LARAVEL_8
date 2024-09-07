@component('zADMIN._wrap.Relationship.index', ['id' => $id ?? 'product_surrogate', 'solo' => true])
@slot('placeholder', 'выбрать product...')
<select class="_select / relative" name="product_surrogate_id">
    {{$slot}}
</select>
@endcomponent