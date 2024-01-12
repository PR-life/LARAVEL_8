@component('_wrap.ADMIN.bar.menu')
@slot('id', 'barMenu_content')
@slot('name')
    @component('_wrap.Chunk.Aside.index')
        @slot('css', 'pointer')
        @slot('name', 'Контент')
        @svg('barMenu_content')
    @endcomponent
@endslot
<div class="-Chunk / diminish -icoDown">
    <div class="paragraph-s"></div>
    @component('_wrap.Chunk.Aside.index')
        @slot('routeName', 'admin.post.index')
        @slot('linkAdd', route('admin.post.create'))
        @slot('icoCss', '-XS')
        @slot('name', 'Материалы')
        @svg('plus')
    @endcomponent
    @component('_wrap.Chunk.Aside.index')
        @slot('linkAdd', route('admin.faq.create'))
        @slot('routeName', 'admin.faq.index')
        @slot('icoCss', '-XS')
        @slot('name', 'Faq')
        @svg('plus')
    @endcomponent 
    @component('_wrap.Chunk.Aside.index')
        @slot('routeName', 'admin.paper.index')
        @slot('linkAdd', route('admin.paper.create'))
        @slot('icoCss', '-XS')
        @slot('name', 'Статьи')
        @svg('plus')
    @endcomponent 
</div>
@endcomponent