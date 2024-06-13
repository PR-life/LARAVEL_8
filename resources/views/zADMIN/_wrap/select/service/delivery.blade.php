@component('zADMIN._wrap.Relationship.index', ['id' => $id ?? 'service_12061902', 'solo' => true])
@slot('placeholder', 'выбрать service...')
<select class="_select / relative" name="service_delivery_id">
    {{$slot}}
</select>
@endcomponent