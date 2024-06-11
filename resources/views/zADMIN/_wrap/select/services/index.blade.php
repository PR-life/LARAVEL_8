@component('zADMIN._wrap.Relationship.index', ['id' => 'services'])
@slot('placeholder', 'связать с Services...')
<select class="_select / relative" name="service_ids[]" multiple>
    {{$slot}}
</select>
@endcomponent