@component('zADMIN._wrap.Relationship.index', ['id' => 'items'])
@slot('placeholder', 'связать с Items...')
<select class="_select / relative" name="item_ids[]" multiple>
    {{$slot}}
</select>
@endcomponent