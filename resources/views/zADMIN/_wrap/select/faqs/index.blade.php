@component('zADMIN._wrap.Relationship.index', ['id' => 'faqs'])
@slot('placeholder', 'выбрать faq...')
<select class="_select / relative" name="faq_ids[]" multiple>
    {{$slot}}
</select>
@endcomponent