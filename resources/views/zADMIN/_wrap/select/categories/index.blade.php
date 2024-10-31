@component('zADMIN._wrap.Relationship.index', ['id' => 'categories'])
@slot('placeholder', 'выбрать collection...')
<select class="_select / relative" name="category_ids[]" multiple>
    {{$slot}}
</select>
@endcomponent