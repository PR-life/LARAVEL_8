@component('zADMIN._wrap.Relationship.index', ['id' => $id ?? 'category_services', 'solo' => true])
@slot('placeholder', 'выбрать категорию...')
<select class="_select / relative" name="category_services_id">
    {{$slot}}
</select>
@endcomponent