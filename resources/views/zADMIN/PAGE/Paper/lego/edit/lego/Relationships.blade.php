@component('zADMIN._wrap.Relationships.index')
    @component('zADMIN._wrap.Relationships.line')
        <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Категория'])
            @component('zADMIN._wrap.select.category.main', ['id' => 'categories'])
                @include('_._brick.select.categories.edit.index',['Categories' => $categories, 'Var' => $paper->category_id])
            @endcomponent
        </div>
        <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Тег'])
            @component('zADMIN._wrap.select.tag.index')
                @include('_._brick.select.tag.edit.index',['Tags' => $tags,'Var' => $paper->tag_id])
            @endcomponent
        </div>
    @endcomponent

    @component('zADMIN._wrap.Relationships.line')
        <div class="space-s">
            @include('zADMIN._wrap.select.name',['Var' => 'Услуги'])
            @component('zADMIN._wrap.select.items.index', ['id' => 'items'])
                @include('_._brick.select.items.edit.index',['Items' => $items, 'Var' => $paper])
            @endcomponent
        </div>
        <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Теги'])
            @component('zADMIN._wrap.select.tags.index')
                @include('_._brick.select.tags.edit.index',['Tags' => $tags,'Var' => $paper])
            @endcomponent
        </div>
    @endcomponent


@endcomponent