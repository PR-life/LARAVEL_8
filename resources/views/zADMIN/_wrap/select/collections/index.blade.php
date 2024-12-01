@component('zADMIN._wrap.Relationship.index', ['id' => 'collections'])
@slot('placeholder', 'выбрать коллекции...')
<select class="_select / relative" name="collection_ids[]" multiple>
    {{$slot}}
</select>
@endcomponent