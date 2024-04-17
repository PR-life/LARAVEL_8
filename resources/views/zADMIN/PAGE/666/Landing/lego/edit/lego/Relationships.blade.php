@component('zADMIN._wrap.Relationships.index')
<div class="flex -wrap / cloud space">
    <div class="Min -w5">
        @include('zADMIN._wrap.select.name',['Var' => 'Категория'])
        @component('zADMIN._wrap.select.category.main', ['id' => 'categories'])
            @include('_._brick.select.categories.edit.index',['Categories' => $categories, 'Var' => $landing->category_id])
        @endcomponent
    </div>
    <div class="Min -w5">
        @include('zADMIN._wrap.select.name',['Var' => 'Тег'])
        @component('zADMIN._wrap.select.tag.index')
            @include('_._brick.select.tag.edit.index',['Tags' => $tags ?? [], 'Var' => $landing->tag_id])
        @endcomponent
    </div>
    <div class="Min -w5">
        @include('zADMIN._wrap.select.name',['Var' => 'Группа'])
        @component('zADMIN._wrap.select.group.main')
            @include('_._brick.select.group.edit.index',['Groups' => $groups, 'Var' => $landing->group_id])
        @endcomponent
    </div>
</div>

<div class="flex cross / space">

    <div class="Min -w5">
        @include('zADMIN._wrap.select.name',['Var' => 'Теги'])
        @component('zADMIN._wrap.select.tags.index')
            @include('_._brick.select.tags.edit.index',['Tags' => $tags,'Var' => $landing])
        @endcomponent
    </div>

</div>


@endcomponent

 