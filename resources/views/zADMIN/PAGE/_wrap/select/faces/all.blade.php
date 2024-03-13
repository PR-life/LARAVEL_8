@component('zADMIN._wrap.Relationship.index', ['id' => 'faces'])
@slot('placeholder', 'выбрать...')
<select class="_select / relative" name="face_ids[]" multiple>
    {{$slot}}
</select>
@endcomponent