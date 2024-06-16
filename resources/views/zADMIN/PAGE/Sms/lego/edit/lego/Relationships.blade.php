@component('zADMIN._wrap.Relationships.index')
    @component('zADMIN._wrap.Relationships.line')
        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Категория'])
            @component('zADMIN._wrap.select.category.main', ['id' => 'category'])
                @include('_._brick.select.category.edit.main',['Categories' => $categories, 'Var' => $sms->category_id])
            @endcomponent
        </div>
        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Тег'])
            @component('zADMIN._wrap.select.tag.index')
                @include('_._brick.select.tag.edit.index',['Tags' => $tags,'Var' => $sms->tag_id])
            @endcomponent
        </div>
        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Группа'])
            @component('zADMIN._wrap.select.group.main')
                @include('_._brick.select.group.edit.index',['Groups' => $groups, 'Var' => $sms->group_id])
            @endcomponent
        </div>
    @endcomponent

    @component('zADMIN._wrap.Relationships.line')
        <div class="flex cross">
            <div class="Min -w5">
                @include('zADMIN._wrap.select.name',['Var' => 'Категории'])
                <div class="wrap-relationship -multiple">
                @component('zADMIN._wrap.select.categories.index')
                    @include('_._brick.select.categories.edit.index',['Categories' => $categories, 'arr' => $sms->categories->pluck('id')->toArray()])
                @endcomponent
                </div>
            </div>
            <div class="Min -w5">
                @include('zADMIN._wrap.select.name',['Var' => 'Теги'])
                <div class="wrap-relationship -multiple">
                @component('zADMIN._wrap.select.tags.index')
                    @include('_._brick.select.tags.edit.index',['Tags' => $tags, 'arr' => $sms->tags->pluck('id')->toArray()])
                @endcomponent
                </div>
            </div>
        </div>
    @endcomponent

@endcomponent