@component('zADMIN._wrap.bar.menu')
@slot('id', 'barMenu_lego')
@slot('name')
    @component('_wrap.Chunk.Aside.index')
        @slot('css', 'pointer')
        @slot('name', 'Lego')
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5054 3.08521C11.748 3.08521 12.7554 4.09256 12.7554 5.33521V11.3352H18.7554C19.998 11.3352 21.0054 12.3426 21.0054 13.5852V18.8352C21.0054 20.0778 19.998 21.0852 18.7554 21.0852H5.25537C4.01273 21.0852 3.00537 20.0778 3.00537 18.8352V5.33521C3.00537 4.09256 4.01273 3.08521 5.25537 3.08521H10.5054ZM11.2554 12.8352H4.50537V18.8352C4.50537 19.2494 4.84116 19.5852 5.25537 19.5852H11.2544L11.2554 12.8352ZM18.7554 12.8352H12.7544V19.5852H18.7554C19.1696 19.5852 19.5054 19.2494 19.5054 18.8352V13.5852C19.5054 13.171 19.1696 12.8352 18.7554 12.8352ZM10.5054 4.58521H5.25537C4.84116 4.58521 4.50537 4.92099 4.50537 5.33521V11.3352H11.2554V5.33521C11.2554 4.92099 10.9196 4.58521 10.5054 4.58521ZM17.9036 2.09205L18.0054 2.08521C18.3851 2.08521 18.6989 2.36736 18.7485 2.73343L18.7554 2.83521V5.33521H21.2554C21.6351 5.33521 21.9489 5.61736 21.9985 5.98343L22.0054 6.08521C22.0054 6.4649 21.7232 6.7787 21.3571 6.82836L21.2554 6.83521H18.7554V9.33521C18.7554 9.7149 18.4732 10.0287 18.1071 10.0784L18.0054 10.0852C17.6257 10.0852 17.3119 9.80305 17.2622 9.43698L17.2554 9.33521V6.83521H14.7554C14.3757 6.83521 14.0619 6.55305 14.0122 6.18698L14.0054 6.08521C14.0054 5.70551 14.2875 5.39171 14.6536 5.34205L14.7554 5.33521H17.2554V2.83521C17.2554 2.45551 17.5375 2.14171 17.9036 2.09205Z" fill="currentColor"></path></svg>
    @endcomponent
@endslot
<div class="-Chunk / diminish -icoDown">
    <div class="paragraph-s"></div>
    @component('_wrap.Chunk.Aside.index')
        @slot('routeName', 'admin.lego.index')
        @slot('linkAdd', route('admin.lego.create'))
        @slot('cssIco', '-XS')
        @slot('name', 'Lego')
        <span class="block / Ico -XS">
            @svg('plus')
        </span>
    @endcomponent 
    @component('_wrap.Chunk.Aside.index')
        @slot('linkAdd', route('admin.faq.create'))
        @slot('routeName', 'admin.faq.index')
        @slot('cssIco', '-XS')
        @slot('name', 'Faq')
        <span class="block / Ico -XS">
            @svg('plus')
        </span>
    @endcomponent 
</div>
@endcomponent