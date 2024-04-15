@component('zADMIN._wrap.Relationship.index', ['id' => 'groups'])
@slot('placeholder', 'выбрать группы...')
<select class="_select / relative" name="group_ids[]" multiple>
    {{$slot}}
</select>
@endcomponent