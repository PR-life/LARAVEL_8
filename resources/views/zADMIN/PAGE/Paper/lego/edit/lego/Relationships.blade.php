@component('zADMIN._wrap.Relationships.index')
    @component('zADMIN._wrap.Relationships.line')
        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Категория'])
            @component('zADMIN._wrap.select.category.main', ['id' => 'category'])
            {{-- @dd($categories) --}}
                @include('_._brick.select.category.edit.main',[
                    'Categories' => $categories,
                    // 'Var' => $paper->category_id
                    'Var' => class_basename($paper) == 'Telegram' ? 
                    ($paper->category_id ? $paper->category_id : $categories->firstWhere('slug', 'news')->id)
                    : $paper->category_id
                    // 'Var' => class_basename($paper) == 'Telegram' ? $categories->firstWhere('slug', 'news'); : $paper->category_id
                    ])
            @endcomponent
        </div>
        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Тег'])
            @component('zADMIN._wrap.select.tag.index')
                @include('_._brick.select.tag.edit.index',['Tags' => $tags ?? [], 'Var' => $paper->tag_id])
            @endcomponent
        </div>
        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Группа'])
            @component('zADMIN._wrap.select.group.main')
                @include('_._brick.select.group.edit.index',['Groups' => $groups, 'Var' => $paper->group_id])
            @endcomponent
        </div>
    @endcomponent

    @component('zADMIN._wrap.Relationships.line')

        <div class="flex cross">

            <div class="Min -w5">
                @include('zADMIN._wrap.select.name',['Var' => 'Категории'])
                <div class="wrap-relationship -multiple">
                    @component('zADMIN._wrap.select.categories.index')
                        @include('_._brick.select.categories.edit.index',['Categories' => $categories,'arr' => $paper->categories->pluck('id')->toArray()])
                    @endcomponent
                </div>
            </div>

            <div class="Min -w5">
                @include('zADMIN._wrap.select.name',['Var' => 'Теги'])
                <div class="wrap-relationship -multiple">
                    @component('zADMIN._wrap.select.tags.index')
                        @include('_._brick.select.tags.edit.index',['Tags' => $tags, 'arr' => $paper->tags->pluck('id')->toArray()])
                    @endcomponent
                </div>
            </div>

        </div>

 
    @endcomponent


    @component('zADMIN._wrap.Relationships.line')


            <div class="Min -w5">
                @include('zADMIN._wrap.select.name',['Var' => 'Items'])
                <div class="wrap-relationship -multiple">
                    @component('zADMIN._wrap.select.items.index', ['id' => 'items'])
                        @include('_._brick.select.items.edit.index',['Items' => $items, 'arr' => $paper->items->pluck('id')->toArray()])
                    @endcomponent
                </div>
            </div>



  
            <div class="Min -w5">
                @include('zADMIN._wrap.select.name',['Var' => 'Faqs'])
                <div class="wrap-relationship -multiple">
                    @component('zADMIN._wrap.select.faqs.index', ['id' => 'faqs'])
                        @include('_._brick.select.faqs.edit.index',['Faqs' => $faqs, 'arr' => $paper->faqs->pluck('id')->toArray(), 'currentId' => $paper->id])
                    @endcomponent
                </div>
            </div>
    
    @endcomponent

@endcomponent
 