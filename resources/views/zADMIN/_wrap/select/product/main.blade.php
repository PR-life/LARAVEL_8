@component('zADMIN._wrap.Relationship.index', ['id' => $id ?? 'product', 'solo' => true])
@slot('placeholder', 'выбрать product...')
<select class="_select / relative" name="product_id">
    {{$slot}}
</select>
@endcomponent