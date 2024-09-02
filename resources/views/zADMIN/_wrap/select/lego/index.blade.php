@component('zADMIN._wrap.Relationship.index', ['id' => 'lego'])
@slot('placeholder', 'выбрать Lego...')
<select class="_select / relative" name="lego_ids[]" multiple>
    {{$slot}}
</select>
@endcomponent