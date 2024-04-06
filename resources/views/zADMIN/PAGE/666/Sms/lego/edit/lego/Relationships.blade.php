@component('zADMIN._wrap.Relationships.index')
    @component('zADMIN._wrap.Relationships.line')
        <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Категория'])
            @component('zADMIN._wrap.select.categories.main', ['id' => 'categories'])
                @include('_._brick.select.categories.edit.main',['Categories' => $categories, 'Var' => $sms->category_id])
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
                @include('_._brick.select.groups.edit.index',['Groups' => $groups, 'Var' => $sms->group_id])
            @endcomponent
        </div>
    @endcomponent
 


 
    @component('zADMIN._wrap.Relationships.line')
        <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Теги'])
            @component('zADMIN._wrap.select.tags.all')
                @include('_._brick.select.tags.edit.index',['Tags' => $tags,'Var' => $sms])
            @endcomponent
        </div>

        <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Категории'])
            {{-- @component('zADMIN._wrap.select.categories.all')
                @include('_._brick.select.categories.edit.index',['Categories' => $categories,'Var' => $faq])
            @endcomponent --}}

            <?
                $arr = $sms->categories->pluck('id')->toArray();
            ?>
            <select class="_select / relative" name="category_ids[]" multiple>
                @foreach($categories as $category)
                    <option value="{{$category->id}}"{{ is_array($arr) && in_array($category->id, $arr) ? ' selected' : ''}}{{$category->id == old('tag_id') ? ' selected' : ''}}>{{$category->name}}</option>
                @endforeach
            </select>
        </div>
    @endcomponent
@endcomponent