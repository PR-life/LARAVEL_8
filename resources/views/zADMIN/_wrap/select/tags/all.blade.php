@component('zADMIN._wrap.Relationship.index', ['id' => 'tags'])
@slot('placeholder', 'выбрать теги...')
<select class="_select / relative" name="tag_ids[]" multiple>
    {{$slot}}
</select>
@endcomponent