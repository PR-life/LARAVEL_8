@component('zADMIN._wrap.Relationships.index')
    @component('zADMIN._wrap.Relationships.line')
        <div class="Min -w5 / wrap-relationship -solo / round">
            @component('zADMIN._wrap.select.name',['Var' => 'Родитель'])
                @include('zADMIN._wrap.select.name_manager')
            @endcomponent
            @component('zADMIN._wrap.select.category.main', ['id' => 'category'])
                @include('_._brick.select.category.edit.main',['Categories' => $categories, 'Var' => $category->category_id])
            @endcomponent
        </div>
 
        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Группа'])
            @component('zADMIN._wrap.select.group.main')
                @include('_._brick.select.group.edit.index',['Groups' => $groups, 'Var' => $category->group_id])
            @endcomponent
        </div>
    @endcomponent

    @component('zADMIN._wrap.Relationships.line')
        <div class="flex cross">
            <div class="Min -w5">
                @include('zADMIN._wrap.select.name',['Var' => 'Теги'])
                <div class="wrap-relationship -multiple">
                    @component('zADMIN._wrap.select.tags.index')
                        @include('_._brick.select.tags.edit.index',['Tags' => $tags, 'arr' => $category->tags->pluck('id')->toArray()])
                    @endcomponent
                </div>
            </div>
            <div class="Min -w5">
                @include('zADMIN._wrap.select.name',['Var' => 'Faqs'])
                <div class="wrap-relationship -multiple">
                    @component('zADMIN._wrap.select.faqs.index', ['id' => 'faqs'])
                        @include('_._brick.select.faqs.edit.index',['Faqs' => $faqs, 'arr' => $category->faqs->pluck('id')->toArray(), 'currentId' => $category->id])
                    @endcomponent
                </div>
            </div>
        </div>
    @endcomponent

    @component('zADMIN._wrap.Relationships.line')
        <div class="flex cross">
            <div class="Min -w5">
                @include('zADMIN._wrap.select.name',['Var' => 'Items'])
                <div class="wrap-relationship -multiple">
                    @component('zADMIN._wrap.select.items.index', ['id' => 'items'])
                        @include('_._brick.select.items.edit.index',['Items' => $items, 'arr' => $category->thisItemsPivot->pluck('id')->toArray()])
                    @endcomponent
                </div>
            </div>

            
            <div class="Min -w5">
                @include('zADMIN._wrap.select.name',['Var' => 'Services'])
                <div class="wrap-relationship -multiple">
                    @component('zADMIN._wrap.select.services.index', ['id' => 'services'])
                        @include('_._brick.select.services.edit.index',['Services' => $services, 'arr' => $category->thisServicesPivot->pluck('id')->toArray()])
                    @endcomponent
                </div>
            </div>
        </div>
    @endcomponent


    @component('zADMIN._wrap.Relationships.line')
        <div class="flex cross">

            <div class="Min -w5 / wrap-relationship -solo / round">
                @include('zADMIN._wrap.select.name',['Var' => 'Category services'])
                @component('zADMIN._wrap.select.category.services', ['id' => 'category_service'])
                    @include('_._brick.select.category.edit.services',['Categories' => $categories, 'Var' => $category->category_services_id])
                @endcomponent
            </div>


        </div>
    @endcomponent


@endcomponent