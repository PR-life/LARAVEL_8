@component('zADMIN._wrap.bar.menu')
@slot('id', 'barMenu_target')
@slot('name')
    @component('_wrap.Chunk.Aside.index')
        @slot('css', 'pointer')
        @slot('name', 'Target')
        @svg('barMenu_target')
    @endcomponent
@endslot
<div class="-Chunk / diminish -icoDown">
    <div class="paragraph-s"></div>
    @component('_wrap.Chunk.Aside.index')
        @slot('routeName', 'admin.landing.index')
        @slot('linkAdd', route('admin.landing.create'))
        @slot('name', 'Landing')
        <span class="block / Ico -XS">
            @svg('plus')
        </span>
    @endcomponent
</div>
@endcomponent