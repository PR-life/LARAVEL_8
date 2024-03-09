@component('_wrap.ADMIN.bar.menu')
@slot('id', 'barMenu_office')
@slot('name')
    @component('_wrap.Chunk.Aside.index')
        @slot('css', 'pointer')
        @slot('name', 'Офис')
        @svg('barMenu_office')
    @endcomponent
@endslot
<div class="-Chunk / diminish -icoDown">
    <div class="paragraph-s"></div>
    @component('_wrap.Chunk.Aside.index')
        @slot('routeName', 'admin.user.index')
        @slot('cssIco', '-XS')
        @slot('name', 'Пользователи')
        @svg('plus')
    @endcomponent
</div>
@endcomponent