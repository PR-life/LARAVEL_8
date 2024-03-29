@component('zADMIN.PAGE._wrap.Relationships.index')
    @component('zADMIN.PAGE._wrap.Relationships.line')
        <div class="Min -w5">
            @include('zADMIN.PAGE._wrap.select.name',['Var' => 'Категория'])
            @component('zADMIN.PAGE._wrap.select.categories.main', ['id' => 'categories'])
                @include('_._brick.select.categories.edit.main',['Categories' => $categories, 'Var' => $paper->category_id])
            @endcomponent
        </div>
        <div class="Min -w5">
            @include('zADMIN.PAGE._wrap.select.name',['Var' => 'Тег'])
            @component('zADMIN.PAGE._wrap.select.tag.index')
                @include('_._brick.select.tag.edit.index',['Tags' => $tags,'Var' => $paper->tag_id])
            @endcomponent
        </div>
    @endcomponent

    @component('zADMIN.PAGE._wrap.Relationships.line')
        <div class="space-s">
            @include('zADMIN.PAGE._wrap.select.name',['Var' => 'Услуги'])
            @component('zADMIN.PAGE._wrap.select.items.index', ['id' => 'items'])
                @include('_._brick.select.items.edit.index',['Items' => $items, 'Var' => $paper])
            @endcomponent
        </div>
        <div class="Min -w5">
            @include('zADMIN.PAGE._wrap.select.name',['Var' => 'Теги'])
            @component('zADMIN.PAGE._wrap.select.tags.all')
                @include('_._brick.select.tags.edit.index',['Tags' => $tags,'Var' => $paper])
            @endcomponent
        </div>
    @endcomponent


@endcomponent