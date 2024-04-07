@component('zADMIN._wrap.Relationships.index')
    @component('zADMIN._wrap.Relationships.line')
        <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Родитель'])
            @component('zADMIN._wrap.select.category.main', ['id' => 'categories'])
                @include('_._brick.select.categories.edit.main',['Categories' => $categories, 'Var' => $category->category_id])
            @endcomponent
        </div>
        <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Тег'])
            @component('zADMIN._wrap.select.tag.index')
                @include('_._brick.select.tag.edit.index',['Tags' => $tags,'Var' => $category->tag_id])
            @endcomponent
        </div>
        <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Группа'])
            @component('zADMIN._wrap.select.group.main')
                @include('_._brick.select.groups.edit.index',['Groups' => $groups, 'Var' => $category->group_id])
            @endcomponent
        </div>
    @endcomponent

    @component('zADMIN._wrap.Relationships.line')
        <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Теги'])
            @component('zADMIN._wrap.select.tags.index')
                @include('_._brick.select.tags.edit.index',['Tags' => $tags,'arr' => $category->tags->pluck('id')->toArray()])
            @endcomponent
        </div>
    @endcomponent

    @component('zADMIN._wrap.Relationships.line')
        <div class="W-100">
            @include('zADMIN._wrap.select.name',['Var' => 'Faq'])
            @component('zADMIN._wrap.select.faqs.all')
                @include('_._brick.select.faqs.edit.index',['Faqs' => $faqs,'arr' => $category->faqs->pluck('id')->toArray()])
            @endcomponent
        </div>
    @endcomponent



@endcomponent