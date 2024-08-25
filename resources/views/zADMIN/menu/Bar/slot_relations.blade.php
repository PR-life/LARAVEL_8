@component('zADMIN._wrap.bar.menu')
@slot('id', 'barMenu_relation')
@slot('name')
    @component('_wrap.Chunk.Aside.index')
        @slot('css', 'pointer')
        @slot('name', 'Связи')
        @svg('barMenu_relations')
    @endcomponent
@endslot
<div class="-Chunk / diminish -icoDown">
    <div class="paragraph-s"></div>
    @component('_wrap.Chunk.Aside.index')
        @slot('routeName', 'admin.category.index')
        @slot('linkAdd', route('admin.category.create'))
        @slot('name', 'Категории')
        <span class="block / Ico -XS">
            @svg('plus')
        </span>
    @endcomponent
    @component('_wrap.Chunk.Aside.index')
        @slot('routeName', 'admin.tag.index')
        @slot('linkAdd', route('admin.tag.create'))
        @slot('name', 'Теги')
        <span class="block / Ico -XS">
            @svg('plus')
        </span>
    @endcomponent 
    @component('_wrap.Chunk.Aside.index')
        @slot('routeName', 'admin.feature.index')
        @slot('linkAdd', route('admin.feature.create'))
        @slot('name', 'Св-ва')
        <span class="block / Ico -XS">
            @svg('plus')
        </span>
    @endcomponent 
    @component('_wrap.Chunk.Aside.index')
        @slot('routeName', 'admin.group.index')
        @slot('linkAdd', route('admin.group.create'))
        @slot('name', 'Группы')
        <span class="block / Ico -XS">
            @svg('plus')
        </span>
    @endcomponent 
</div>
@endcomponent