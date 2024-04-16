@component('zADMIN._wrap.Relationships.index')
    @component('zADMIN._wrap.Relationships.line')
        <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Категория'])
            @component('zADMIN._wrap.select.category.main', ['id' => 'category'])
                @include('_._brick.select.category.edit.main',['Categories' => $categories, 'Var' => $sms->category_id])
            @endcomponent
        </div>
        <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Тег'])
            @component('zADMIN._wrap.select.tag.index')
                @include('_._brick.select.tag.edit.index',['Tags' => $tags,'Var' => $sms->tag_id])
            @endcomponent
        </div>
        <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Группа'])
            @component('zADMIN._wrap.select.group.main')
                @include('_._brick.select.group.edit.index',['Groups' => $groups, 'Var' => $sms->group_id])
            @endcomponent
        </div>
    @endcomponent

    @component('zADMIN._wrap.Relationships.line')
        <div class="W-100 / flex cross">
            <div class="W-100">
                @include('zADMIN._wrap.select.name',['Var' => 'Категории'])
                @component('zADMIN._wrap.select.categories.index')
                    @include('_._brick.select.categories.edit.index',['Categories' => $categories, 'arr' => $sms->categories->pluck('id')->toArray()])
                @endcomponent
            </div>
            <div class="W-100">
                @include('zADMIN._wrap.select.name',['Var' => 'Теги'])
                @component('zADMIN._wrap.select.tags.index')
                    @include('_._brick.select.tags.edit.index',['Tags' => $tags, 'arr' => $sms->tags->pluck('id')->toArray()])
                @endcomponent
            </div>
        </div>
    @endcomponent

@endcomponent