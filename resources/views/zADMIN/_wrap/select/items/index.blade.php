@component('zADMIN._wrap.Relationship.index', ['id' => 'items'])
@slot('placeholder', 'связать с услугой...')
<select class="_select / relative" name="item_ids[]" multiple>
    {{$slot}}
</select>
@endcomponent