<ul class="menu -tile -S / lie cross-s">
    @component('zLara.menu._wrap.tile')
        @slot('href', route('jj.text.index'))
        @slot('text_top','sandbox')
        @slot('text_footer','Text')
    @endcomponent
    @component('zLara.menu._wrap.tile')
        @slot('href', route('jj.html.index'))
        @slot('text_top','sandbox')
        @slot('text_footer','Html')
    @endcomponent
    @component('zLara.menu._wrap.tile')
        @slot('href', route('jj.dali.index'))
        @slot('text_top','sandbox')
        @slot('text_footer','Dali')
    @endcomponent
    @component('zLara.menu._wrap.tile')
        @slot('href', route('jj.shema.index'))
        @slot('text_top','skeleton')
        @slot('text_footer','Shema')
    @endcomponent
    @component('zLara.menu._wrap.tile')
        @slot('href', route('jj.skeleton.index'))
        @slot('text_top','wrap')
        @slot('text_footer','Skeleton')
    @endcomponent
</ul>

 