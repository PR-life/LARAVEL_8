@component('zADMIN._wrap.Relationship.index', ['id' => 'group', 'solo' => true,'cssSelect' => 'Select -js'])
@slot('placeholder', 'выбрать группу...')
<select class="_select / relative" name="group_id">
    {{$slot}}
</select>
@endcomponent