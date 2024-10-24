@component('zADMIN._wrap.bar.menu')
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
        @slot('routeName', 'admin.item.index')
        @slot('linkAdd', route('admin.item.create'))
        @slot('cssIco', '-XS')
        @slot('name', 'item')
        <span class="block / Ico -XS">
            @svg('plus')
        </span>
    @endcomponent 
    @component('_wrap.Chunk.Aside.index')
        @slot('linkAdd', route('admin.product.create'))
        @slot('routeName', 'admin.product.index')
        @slot('cssIco', '-XS')
        @slot('name', 'Товары')
        <span class="block / Ico -XS">
            @svg('plus')
        </span>
    @endcomponent
    <div class="paragraph"></div>


    @component('_wrap.Chunk.Aside.index')
        @slot('routeName', 'admin.paper.index')
        @slot('linkAdd', route('admin.paper.create'))
        @slot('cssIco', '-XS')
        @slot('name', 'Статьи')
        <span class="block / Ico -XS">
            @svg('plus')
        </span>
    @endcomponent 
    @component('_wrap.Chunk.Aside.index')
        @slot('linkAdd', route('admin.service.create'))
        @slot('routeName', 'admin.service.index')
        @slot('cssIco', '-XS')
        @slot('name', 'Услуги')
        <span class="block / Ico -XS">
            @svg('plus')
        </span>
    @endcomponent 
    @component('_wrap.Chunk.Aside.index')
        @slot('routeName', 'admin.telegram.index')
        @slot('linkAdd', route('admin.telegram.create'))
        @slot('cssIco', '-XS')
        @slot('name', 'Новости')
        <span class="block / Ico -XS">
            @svg('plus')
        </span>
    @endcomponent

    <div class="paragraph"></div>
    @component('_wrap.Chunk.Aside.index')
        @slot('routeName', 'admin.post.index')
        @slot('linkAdd', route('admin.post.create'))
        @slot('cssIco', '-XS')
        @slot('name', 'Материалы')
        <span class="block / Ico -XS">
            @svg('plus')
        </span>
    @endcomponent
</div>
@endcomponent