@component('_wrap.ADMIN.bar.menu')
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
        @slot('icoCss', '-XS')
        @slot('name', 'Категории')
        @svg('plus')
    @endcomponent
    @component('_wrap.Chunk.Aside.index')
        @slot('routeName', 'admin.tag.index')
        @slot('linkAdd', route('admin.tag.create'))
        @slot('icoCss', '-XS')
        @slot('name', 'Теги')
        @svg('plus')
    @endcomponent 
    @component('_wrap.Chunk.Aside.index')
        @slot('routeName', 'admin.group.index')
        @slot('linkAdd', route('admin.group.create'))
        @slot('icoCss', '-XS')
        @slot('name', 'Группы')
        @svg('plus')
    @endcomponent 
</div>
@endcomponent