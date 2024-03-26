@component('zADMIN.PAGE._wrap.Relationships.index')
<div class="flex -wrap / cloud space">
    <div class="Min -w5">
        @include('zADMIN.PAGE._wrap.select.name',['Var' => 'Категория'])
        @component('zADMIN.PAGE._wrap.select.categories.main', ['id' => 'category'])
            @include('_._brick.select.categories.edit.main',['Categories' => $categories, 'Var' => $faq->category_id])
        @endcomponent
    </div>
    <div class="Min -w5">
        @include('zADMIN.PAGE._wrap.select.name',['Var' => 'Тег'])
        @component('zADMIN.PAGE._wrap.select.tag.index')
            @include('_._brick.select.tag.edit.index',['Tags' => $tags ?? [], 'Var' => $faq->tag_id])
        @endcomponent
    </div>
    <div class="Min -w5">
        @include('zADMIN.PAGE._wrap.select.name',['Var' => 'Группа'])
        @component('zADMIN.PAGE._wrap.select.group.main')
            @include('_._brick.select.groups.edit.index',['Groups' => $groups, 'Var' => $faq->group_id])
        @endcomponent
    </div>
</div>

<div class="flex cross / space">

    <div class="Min -w5">
        @include('zADMIN.PAGE._wrap.select.name',['Var' => 'Теги'])
        @component('zADMIN.PAGE._wrap.select.tags.all')
            @include('_._brick.select.tags.edit.index',['Tags' => $tags ?? [],'Var' => $faq])
        @endcomponent
    </div>


    <div class="Min -w5">
        @include('zADMIN.PAGE._wrap.select.name',['Var' => 'Категории'])
        {{-- @component('zADMIN.PAGE._wrap.select.categories.all')
            @include('_._brick.select.categories.edit.index',['Categories' => $categories,'Var' => $faq])
        @endcomponent --}}

        <?
            $arr = $faq->categories->pluck('id')->toArray();
        ?>
        <select class="_select / relative" name="category_ids[]" multiple>
            @foreach($categories as $category)
                <option value="{{$category->id}}"{{ is_array($arr) && in_array($category->id, $arr) ? ' selected' : ''}}{{$category->id == old('tag_id') ? ' selected' : ''}}>{{$category->name}}</option>
            @endforeach
        </select>

 


    </div>

</div>


@endcomponent

 