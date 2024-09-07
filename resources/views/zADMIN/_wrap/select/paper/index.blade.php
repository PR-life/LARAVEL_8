@component('zADMIN._wrap.Relationship.index', ['id' => $id ?? 'paper_06091313', 'solo' => true])
@slot('placeholder', 'выбрать paper...')
<select class="_select / relative" name="{{$name ?? 'paper_id'}}">
    {{$slot}}
</select>
@endcomponent