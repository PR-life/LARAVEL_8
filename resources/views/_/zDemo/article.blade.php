<div id="tabArticle_1" class="Tabs -x1"> 

    <div class="right-text space-right">
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
    </div>

    <div class="Pente"> 
        <div class="{{$css_02051157 ?? 'Article aura / Medium text / [ margin bottom S ]'}}">

            
            @include('_.zDemo.Article.header.tab_1')
            @include('_.zDemo.Article.header.tab_2')

            @include('_.zDemo.text.p.dropcap')




            <dl class="-dot / space Copybook -White">
                <dt>Стоимость гос. Пошлины</dt>
                <dd>7 500 руб.</dd>
                <dt>Сроки оказания услуги</dt>
                <dd>45 календ. дн.</dd>
                <dt>Категории получателей</dt>
                <dd>Индивидуальный предприниматель</dd>
            </dl>


            <div class="text [ margin top ]">
                <div class="Plot plot-h -XS / Copybook vol-2"></div>
            </div>


            <style>
                .Copybook.vol-2 {
                    box-shadow: -0.5rem 0.5rem 1rem rgba(0, 0, 0, 0.3);
                    background-position: 0% 1rem;
                    background-size: 100% 1rem;
                    background-repeat: repeat-y;
                    background-image: linear-gradient(to bottom, #fff calc(1rem - 1px), #ccc calc(1rem - 1px), #ccc 1rem, #fff 1rem);
                }
            </style>





            @include('_.zDemo.text.Opinion.index')
            @include('_.zDemo.text.Story.index')
            @include('_.zDemo.text.Citation.index')
            @include('_.zDemo.text.blockquote.index')
            {{-- @include('_.zDemo.text.blockquote.vol_2') --}}
            {{-- @include('_.zDemo.text.blockquote.x_airM') --}}
            {{-- @include('_.zDemo.text.blockquote.dcZInk') --}}
        
            @include('_.zDemo.Article.body')
        </div>
    </div>
</div>