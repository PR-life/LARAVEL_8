@component('zADMIN._wrap.Relationships.index')
    @component('zADMIN._wrap.Relationships.line')
        <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Категория'])
            @component('zADMIN._wrap.select.category.main', ['id' => 'category'])
                @include('_._brick.select.category.edit.main',['Categories' => $categories, 'Var' => $item->category_id])
            @endcomponent
        </div>
        <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Тег'])
            @component('zADMIN._wrap.select.tag.index')
                @include('_._brick.select.tag.edit.index',['Tags' => $tags,'Var' => $item->tag_id])
            @endcomponent
        </div>
        <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Группа'])
            @component('zADMIN._wrap.select.group.main')
                @include('_._brick.select.group.edit.index',['Groups' => $groups, 'Var' => $item->group_id])
            @endcomponent
        </div>
    @endcomponent

    @component('zADMIN._wrap.Relationships.line')
        <div class="flex cross">
            <div class="Min -w5">
                @include('zADMIN._wrap.select.name',['Var' => 'Теги'])
                @component('zADMIN._wrap.select.tags.index')
                    @include('_._brick.select.tags.edit.index',['Tags' => $tags,'arr' => $item->tags->pluck('id')->toArray()])
                @endcomponent
            </div>
            <div class="Min -w5">
                @include('zADMIN._wrap.select.name',['Var' => 'Категории'])
                @component('zADMIN._wrap.select.categories.index')
                    @include('_._brick.select.categories.edit.index',['Categories' => $categories,'arr' => $item->categories->pluck('id')->toArray()])
                @endcomponent
            </div>
        </div>
    @endcomponent

    @component('zADMIN._wrap.Relationships.line')
        <div class="W-100">
            @include('zADMIN._wrap.select.name',['Var' => 'Items'])
            @component('zADMIN._wrap.select.items.index')
                @include('_._brick.select.items.edit.index',['Items' => $items,'arr' => $item->items->pluck('id')->toArray(),'currentId' => $item->id])
            @endcomponent
        </div>
    @endcomponent

    @component('zADMIN._wrap.Relationships.line')
        <div class="W-100">
            @include('zADMIN._wrap.select.name',['Var' => 'Faqs'])
            @component('zADMIN._wrap.select.faqs.index')
                @include('_._brick.select.faqs.edit.index',['Faqs' => $faqs,'arr' => $item->faqs->pluck('id')->toArray()])
            @endcomponent
        </div>
    @endcomponent


@endcomponent