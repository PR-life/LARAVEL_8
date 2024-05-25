@component('zADMIN._wrap.Relationships.index')
    @component('zADMIN._wrap.Relationships.line')
        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Категория'])
            @component('zADMIN._wrap.select.category.main', ['id' => 'category'])
                @include('_._brick.select.category.edit.main',['Categories' => $categories, 'Var' => $tag->category_id])
            @endcomponent
        </div>
        <div class="Min -w5">

            <div class="menu -tile {{$css_18051448 ?? '-XS'}} / cloud / net">
                @component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content'])
                    @slot('name', 'group_id')
                    @slot('id', 'group_id_none')
                    @slot('value', null)
                    @slot('param_from_bd', null)
                    
                    не выбран
                @endcomponent
                @component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content'])
                    @slot('name', 'group_id')
                    @slot('id', 'group_id_backend')
                    @slot('value', '1')
                    @slot('param_from_bd', $tag->group_id)
                    
                    Backend
                @endcomponent
                @component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content'])
                    @slot('name', 'group_id')
                    @slot('id', 'group_id_frontend')
                    @slot('value', '2')
                    @slot('param_from_bd', $tag->group_id)
                    
                    Frontend
                @endcomponent
            </div>

            {{-- @include('zADMIN._wrap.select.name',['Var' => 'Группа'])
            @component('zADMIN._wrap.select.group.main')
                @include('_._brick.select.group.edit.index',['Groups' => $groups, 'Var' => $tag->group_id])
            @endcomponent --}}
        </div>
    @endcomponent
 


    @component('zADMIN._wrap.Relationships.line')

        <div class="flex cross">
            <div class="Min -w5">
                @include('zADMIN._wrap.select.name',['Var' => 'Категории'])
                <div class="wrap-relationship -multiple">
                    @component('zADMIN._wrap.select.categories.index')
                        @include('_._brick.select.categories.edit.index',['Categories' => $categories,'arr' => $tag->categories->pluck('id')->toArray()])
                    @endcomponent
                </div>
            </div>
            {{-- <div class="Min -w5">
                @include('zADMIN._wrap.select.name',['Var' => 'Группы'])
                <div class="wrap-relationship -multiple">
                    @component('zADMIN._wrap.select.groups.index')
                        @include('_._brick.select.groups.edit.index',['Groups' => $groups, 'arr' => $faq->groups->pluck('id')->toArray()])
                    @endcomponent
                </div>
            </div> --}}
        </div>


    @endcomponent


@endcomponent