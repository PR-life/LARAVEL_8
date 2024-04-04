@component('zADMIN._wrap.Relationships.index')
    @component('zADMIN._wrap.Relationships.line')
        <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Категория'])
            @component('zADMIN._wrap.select.categories.main', ['id' => 'categories'])
                @include('_._brick.select.categories.edit.main',['Categories' => $categories, 'Var' => $post->category_id])
            @endcomponent
        </div>
        <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Тег'])
            @component('zADMIN._wrap.select.tag.index')
                @include('_._brick.select.tag.edit.index',['Tags' => $tags,'Var' => $post->tag_id])
            @endcomponent
        </div>
    @endcomponent

    @component('zADMIN._wrap.Relationships.line')
        {{-- <div class="space-s">
            @include('zADMIN._wrap.select.name',['Var' => 'Услуги'])
            @component('zADMIN._wrap.select.items.index', ['id' => 'items'])
                @include('_._brick.select.items.edit.index',['Items' => $items, 'Var' => $post])
            @endcomponent
        </div> --}}
        {{-- <div class="Min -w5">
            @include('zADMIN._wrap.select.name',['Var' => 'Теги'])
            @component('zADMIN._wrap.select.tags.all')
                @include('_._brick.select.tags.edit.index',['Tags' => $tags,'Var' => $post])
            @endcomponent
        </div> --}}
    @endcomponent


@endcomponent