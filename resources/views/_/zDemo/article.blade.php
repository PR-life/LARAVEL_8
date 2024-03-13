<div id="tabArticle_1" class="Tabs -x1"> 
    <div class="inline / edge edgePC / margin bottom S">
        <ul class="menu -tag / Kite kite-space / pointer" data-click data-switch data-package='tabArticle_1' data-stop>
            <li data-item='1' data-packagetype='css' data-packagefoo='radio' package='Tabs -x1' class="active">
                <span class="a Ellipsis / noEvents">header 1</span>
            </li>
            <li data-item='2' data-packagetype='css' data-packagefoo='radio' package='Tabs -x2'>
                <span class="a Ellipsis / noEvents">header 2</span>
            </li>
        </ul>
    </div>
    <div class="Pente"> 
        <div class="{{$css ?? 'Article aura / Medium text Edge / [ margin bottom S ]'}}">
            @include('_.demo.Article.header.tab_1')
            @include('_.demo.Article.header.tab_2')

            @include('_.demo.text.p.dropcap')

            @include('_.demo.text.blockquote.vol_2')
            @include('_.demo.text.blockquote.x_airM')
            @include('_.demo.text.blockquote.dcZInk')
        
            @include('_.demo.Article.body')
        </div>
    </div>
</div>