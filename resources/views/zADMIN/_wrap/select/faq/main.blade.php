@component('zADMIN._wrap.Relationship.index', ['id' => $id, 'solo' => true])
@slot('placeholder', 'выбрать faq...')
<select class="_select / relative" name="faq_id">
    {{$slot}}
</select>
@endcomponent