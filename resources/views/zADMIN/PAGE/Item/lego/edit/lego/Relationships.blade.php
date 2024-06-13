@component('zADMIN._wrap.Relationships.index')
    @component('zADMIN._wrap.Relationships.line')
        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Категория'])
            @component('zADMIN._wrap.select.category.main', ['id' => 'category'])
                @include('_._brick.select.category.edit.main',[
                    'Categories' => $categories,
                    'Var' => class_basename($item) == 'Telegram' ? 
                    ($item->category_id ? $item->category_id : $categories->firstWhere('slug', 'news')->id)
                    : $item->category_id
                    ])
            @endcomponent
        </div>
        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Тег'])
            @component('zADMIN._wrap.select.tag.index')
                @include('_._brick.select.tag.edit.index',['Tags' => $tags ?? [], 'Var' => $item->tag_id])
            @endcomponent
        </div>
        <div class="Min -w5 / wrap-relationship -solo / round">
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
                <div class="wrap-relationship -multiple">
                    @component('zADMIN._wrap.select.tags.index')
                        @include('_._brick.select.tags.edit.index',['Tags' => $tags, 'arr' => $item->tags->pluck('id')->toArray()])
                    @endcomponent
                </div>
            </div>
            <div class="Min -w5">
                @include('zADMIN._wrap.select.name',['Var' => 'Категории'])
                <div class="wrap-relationship -multiple">
                    @component('zADMIN._wrap.select.categories.index')
                        @include('_._brick.select.categories.edit.index',['Categories' => $categories,'arr' => $item->categories->pluck('id')->toArray()])
                    @endcomponent
                </div>
            </div>
        </div>
    @endcomponent

    @component('zADMIN._wrap.Relationships.line')
        <div class="W-100">
            @include('zADMIN._wrap.select.name',['Var' => 'Items'])
            <div class="wrap-relationship -multiple">
                @component('zADMIN._wrap.select.items.index', ['id' => 'items'])
                    @include('_._brick.select.items.edit.index',['Items' => $items, 'arr' => $item->items->pluck('id')->toArray()])
                @endcomponent
            </div>
        </div>
    @endcomponent

    @component('zADMIN._wrap.Relationships.line')
        <div class="W-100">
            @include('zADMIN._wrap.select.name',['Var' => 'Faqs'])
            <div class="wrap-relationship -multiple">
                @component('zADMIN._wrap.select.faqs.index', ['id' => 'faqs'])
                    @include('_._brick.select.faqs.edit.index',['Faqs' => $faqs, 'arr' => $item->faqs->pluck('id')->toArray(), 'currentId' => $item->id])
                @endcomponent
            </div>
        </div>
    @endcomponent

    @component('zADMIN._wrap.Relationships.line')
        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Родитель'])
            @component('zADMIN._wrap.select.item.main', ['id' => 'item'])
                @include('_._brick.select.item.edit.main',['Items' => $items, 'Var' => $item->item_id])
            @endcomponent
        </div>
        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Delivery service'])
            @component('zADMIN._wrap.select.service.delivery', ['id' => 'delivery_service'])
                @include('_._brick.select.service.edit.delivery',['Services' => $services, 'Var' => $item->service_delivery_id])
            @endcomponent
        </div>

        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Category services'])
            @component('zADMIN._wrap.select.category.services', ['id' => 'category_service'])
                @include('_._brick.select.category.edit.services',['Categories' => $categories, 'Var' => $item->category_services_id])
            @endcomponent
        </div>

    @endcomponent

@endcomponent