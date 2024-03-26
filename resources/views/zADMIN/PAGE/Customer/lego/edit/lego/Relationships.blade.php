@component('zADMIN.PAGE._wrap.Relationships.index')
<div class="flex cross / space">
    <div class="Min -w5">
        @include('zADMIN.PAGE._wrap.select.name',['Var' => 'Категория'])
        @component('zADMIN.PAGE._wrap.select.categories.main', ['id' => 'categories'])
            @include('_._brick.select.categories.edit.main',['Categories' => $categories, 'Var' => $face->id])
        @endcomponent
    </div>
    {{-- <div class="Min -w5">
        @include('zADMIN/PAGE/_wrap/select/name',['Var' => 'Теги'])
        @component('zADMIN.PAGE._wrap.select.tags.all')
            @include('_._brick.select.tags.edit.index',['Tags' => $tags,'Var' => $face])
        @endcomponent
    </div> --}}
</div>

{{-- <div class="space-s">
    @include('zADMIN/PAGE/_wrap/select/name',['Var' => 'Услуги'])
    @component('zADMIN.PAGE._wrap.select.items.index', ['id' => 'items'])
        @include('_._brick.select.items.edit.index',['Items' => $items, 'Var' => $face])
    @endcomponent
</div> --}}
@endcomponent