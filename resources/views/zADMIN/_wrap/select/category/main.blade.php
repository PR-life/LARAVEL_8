@component('zADMIN._wrap.Relationship.index', ['id' => $id ?? 'category', 'solo' => true])
@slot('placeholder', 'выбрать категорию...')
<select class="_select / relative" name="category_id">
    {{$slot}}
</select>
@endcomponent