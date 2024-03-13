@component('zADMIN._wrap.bar.menu')
    @slot('id', 'barMenu_editorial')
    @slot('name')
        @component('_wrap.Chunk.Aside.index')
            @slot('css', 'pointer')
            @slot('name', 'Редакция')
            @svg('barMenu_editorial')
        @endcomponent
    @endslot

<div class="-Chunk / diminish -icoDown">
    <div class="paragraph-s"></div>
    @component('_wrap.Chunk.Aside.index')
        @slot('routeName', 'admin.sms.index')
        @slot('cssIco', '-XS')
        @slot('name', 'Формы')
        @svg('pen')
    @endcomponent
    {{-- @component('_wrap.Chunk.Aside.index')
        @slot('routeName', 'admin.morda')
        @slot('cssIco', '-XS')
        @slot('name', 'Комментарии')
        @svg('plus')
    @endcomponent  --}}
</div>
@endcomponent