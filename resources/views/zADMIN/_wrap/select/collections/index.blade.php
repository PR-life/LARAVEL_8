@component('zADMIN._wrap.Relationship.index', ['id' => 'collections'])
@slot('placeholder', 'выбрать категории...')
<select class="_select / relative" name="collection_ids[]" multiple>
    {{$slot}}
</select>
@endcomponent