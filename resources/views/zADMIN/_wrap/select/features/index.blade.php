@component('zADMIN._wrap.Relationship.index', ['id' => 'features'])
@slot('placeholder', 'features...')
<select class="_select / relative" name="feature_ids[]" multiple>
    {{$slot}}
</select>
@endcomponent