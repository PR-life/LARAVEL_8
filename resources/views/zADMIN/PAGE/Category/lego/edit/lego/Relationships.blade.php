@component('zADMIN._wrap.Relationships.index')
    @component('zADMIN._wrap.Relationships.line')
        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Родитель'])
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

        </div>
    @endcomponent

    @component('zADMIN._wrap.Relationships.line')
        <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Faqs'])
            <div class="wrap-relationship -multiple">
                @component('zADMIN._wrap.select.faqs.index', ['id' => 'faqs'])
                    @include('_._brick.select.faqs.edit.index',['Faqs' => $faqs, 'arr' => $category->faqs->pluck('id')->toArray(), 'currentId' => $category->id])
                @endcomponent
            </div>
        </div>
    @endcomponent



@endcomponent