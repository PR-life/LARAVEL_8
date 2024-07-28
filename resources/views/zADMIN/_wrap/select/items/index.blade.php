@component('zADMIN._wrap.Relationship.index', ['id' => 'items','cssSelect' => 'Select -js vol-withSearch vol-withManager'])
@slot('placeholder', 'связать с Items...')
<select class="_select / relative" name="item_ids[]" multiple>
    {{$slot}}
</select>
@endcomponent
