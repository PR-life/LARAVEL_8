@component('zADMIN/PAGE/_wrap/Relationships/index')
<div class="flex cross / space">
    <div class="Min -w5">
        @include('zADMIN/PAGE/_wrap/select/name',['Var' => 'Категория'])
        @component('zADMIN.PAGE._wrap.select.categories.main', ['id' => 'categories'])
            @include('_._brick.select.categories.edit.main',['Categories' => $categories, 'Var' => $faq])
        @endcomponent
    </div>
    <div class="Min -w5">
        @include('zADMIN/PAGE/_wrap/select/name',['Var' => 'Теги'])
        @component('zADMIN.PAGE._wrap.select.tags.all')
            @include('_._brick.select.tags.edit.index',['Tags' => $tags,'Var' => $faq])
        @endcomponent
    </div>
</div>

<div class="flex cross / space">
    <div class="Min -w5">
        @include('zADMIN/PAGE/_wrap/select/name',['Var' => 'Группа'])
        @component('zADMIN.PAGE._wrap.select.group.main')
            @include('_._brick.select.groups.edit.index',['Groups' => $groups, 'Var' => $faq->group_id])
        @endcomponent
    </div>
    <div class="Min -w5">
        @include('zADMIN/PAGE/_wrap/select/name',['Var' => 'Тег'])
        @component('zADMIN.PAGE._wrap.select.tag.index')
            {{-- @include('_._brick.select.tags.edit.index',['Tags' => $tags,'Var' => $item]) --}}
            @include('_._brick.select.tag.edit.index',['Tags' => $tags, 'Var' => $faq->tag_id])
        @endcomponent
    </div>
</div>


@endcomponent

 