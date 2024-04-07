@component('zADMIN._wrap.Relationship.index', ['id' => $id ?? 'group', 'solo' => true])
@slot('placeholder', 'выбрать группу...')
<select class="_select / relative" name="group_id">
    {{$slot}}
</select>
@endcomponent