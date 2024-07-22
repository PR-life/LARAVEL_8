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
                    @slot('value', '9')
                    @slot('param_from_bd', $tag->group_id)
                    
                    Backend
                @endcomponent
                @component('zADMIN._wrap.menu.tile.radio', ['cssName' => 'content'])
                    @slot('name', 'group_id')
                    @slot('id', 'group_id_frontend')
                    @slot('value', '10')
                    @slot('param_from_bd', $tag->group_id)
                    
                    Frontend
                @endcomponent

                @includeIf('zADMIN.PAGE.Tag._this.edit.group_id')
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
        </div>


    @endcomponent



    @component('zADMIN._wrap.Relationships.line')

        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Delivery service'])
            @component('zADMIN._wrap.select.service.delivery', ['id' => 'delivery_service'])
                @include('_._brick.select.service.edit.delivery',['Services' => $services, 'Var' => $tag->service_delivery_id])
            @endcomponent
        </div>

        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Category services'])
            @component('zADMIN._wrap.select.category.services', ['id' => 'category_service'])
                @include('_._brick.select.category.edit.services',['Categories' => $categories, 'Var' => $tag->category_services_id])
            @endcomponent
        </div>

    @endcomponent


@endcomponent