<ul class="menu -tile -S / lie cross-s">
    @component('zLara.menu._wrap.tile')
        @slot('href', route('jj.deep.index'))
        @slot('text_top','блоки')
        @slot('text_footer','Deep')
    @endcomponent
    @component('zLara.menu._wrap.tile')
        @slot('href', route('jj.hang.index'))
        @slot('text_top','блоки')
        @slot('text_footer','Hang')
    @endcomponent
</ul>

 