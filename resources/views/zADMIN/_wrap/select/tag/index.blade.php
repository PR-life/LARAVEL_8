@component('zADMIN._wrap.Relationship.index', ['id' => 'tag', 'solo' => true,'cssSelect' => 'Select -js'])
@slot('placeholder', 'выбрать тег...')
<select class="_select / relative" name="tag_id">
    {{$slot}}
</select>
@endcomponent


{{-- 
<select name="tag_id" data-placeholder="Выбрать тэг">
    <option selected value> -- тег не выбран -- </option>
    {!!$slot!!}
</select>	 --}}