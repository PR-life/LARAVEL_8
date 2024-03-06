@component('zADMIN._wrap.Relationship.index', ['id' => 'faces', 'solo' => true])
@slot('placeholder', 'выбрать...')
<select class="_select / relative" name="face_id">
    {{$slot}}
</select>
@endcomponent