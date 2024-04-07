@component('zADMIN._wrap.Relationship.index', ['id' => $id ?? 'tag', 'solo' => true])
@slot('placeholder', 'выбрать тег...')
<select class="_select / relative" name="tag_id">
    {{$slot}}
</select>
@endcomponent