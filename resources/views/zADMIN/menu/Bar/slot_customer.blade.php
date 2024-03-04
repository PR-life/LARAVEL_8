@component('_wrap.ADMIN.bar.menu')
    @slot('id', 'barMenu_customer')
    @slot('name')
        @component('_wrap.Chunk.Aside.index')
            @slot('css', 'pointer')
            @slot('name', 'Клиенты')
            @svg('barMenu_customer')
        @endcomponent
    @endslot
    <div class="-Chunk / diminish -icoDown">
        <div class="paragraph-s"></div>

        @component('_wrap.Chunk.Aside.index')
            @slot('routeName', 'admin.customer.index')
            {{-- @slot('linkAdd', "route('admin.customer.create')") --}}
            {{-- @slot('icoCss', '-XS') --}}
            @slot('name', 'Клиентсткая база')
            <svg viewBox="0 0 24 24"><path d="M9.78 2.248a1 1 0 01.442 1.95 8.013 8.013 0 00-6.02 6.008 1 1 0 11-1.95-.447A10.013 10.013 0 019.78 2.248zm-7.514 12.05a1 1 0 111.946-.458 8.013 8.013 0 005.935 5.945 1 1 0 11-.461 1.946 10.014 10.014 0 01-7.42-7.433zm12.238 7.386a1 1 0 01-.5-1.937A8.003 8.003 0 0019.25 8.614a1 1 0 011.812-.848 10.003 10.003 0 01-6.558 13.918zm4.078-17.212a1 1 0 11-1.317 1.505 7.975 7.975 0 00-3.368-1.751 1 1 0 11.472-1.943 9.975 9.975 0 014.213 2.189z" fill="#ccc"></path></svg>
        @endcomponent

 

        {{-- Категории клиентов --}}
        {{-- Программа лояльности --}}

    </div>
@endcomponent

