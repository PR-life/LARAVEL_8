@component('_wrap.ADMIN.bar.menu', ['css' => $css ?? ''])
    @slot('id', 'barMenu_customer')
    @slot('name')
        @component('_wrap.Chunk.Aside.index')
            @slot('css', 'pointer')
            @slot('name', 'Клиенты')
            @svg('barMenu_customer')
        @endcomponent
    @endslot

<div class="-Chunk / diminish -icoDown">
    <div class="paragraph"></div>
    @component('_wrap.Chunk.Aside.index')
        @slot('routeName', 'admin.customer.index')
        @slot('icoCss', '-XS')
        @slot('sizeName', 'content-xs')
        @slot('name', 'Клиентсткая база')
        @svg('plus')
    @endcomponent
    @component('_wrap.Chunk.Aside.index')
        @slot('routeName', 'admin.customer.category.index')
        @slot('icoCss', '-XS')
        @slot('sizeName', 'content-xs')
        @slot('name', 'Категории клиентов')
        @svg('plus')
    @endcomponent
    @component('_wrap.Chunk.Aside.index')
        @slot('routeName', 'admin.customer.discount.index')
        @slot('icoCss', '-XS')
        @slot('sizeName', 'content-xs')
        @slot('name', 'Программа лояльности')
        @svg('plus')
    @endcomponent
</div>




@endcomponent