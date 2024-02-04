@component('zUTIN._wrap.A4.index', ['css' => $css ?? null,'cssPlot' => '-h -mbl', 'loop' => 'tools'])

    @slot('cssHead','space-m')
    @slot('cssBody','space-s')

    @slot('head')
        @component('zUTIN._wrap.Font')
            @slot('name','Какие направления мы рассмотрели')
            {{-- @slot('name','Планирование ресурсов') --}}
            {{-- @slot('name','Инструменты и методы') --}}
            <div class="JsScroll">
                <div class="_p Grey">Планирование ресурсов. Задействовать целевые для достижения <a href="#page_0">текущей задачи</a></div>
            </div>
        @endcomponent
    @endslot


 

 

 <div class="Abs_PC -all / flex / bg-blueFon space-s round">

    <div class="Grid x4 -gapS / Void void">
        @component('zUTIN._lego.wrap.bone')
        @slot('name', 'Медиа и СМИ')
            <ul class="-lineHeight void">
                <li>ТВ-каналы</li>
                <li>СМИ</li>
                <li>Радио</li>
            </ul>
        @endcomponent

 
        @component('zUTIN._lego.wrap.bone')
        @slot('name', 'Контент-маркетинг')
            <ul class="-lineHeight void">
                <li>Рекомендации</li>
            </ul>
        @endcomponent


        @component('zUTIN._lego.wrap.bone')
        @slot('name', 'Просветительская деятельность')
            
        <ul class="-lineHeight void">
            <li>Блогеры</li>
            <li>Инфлюенсеры</li>
        </ul>
 
        @endcomponent
 


        @component('zUTIN._lego.wrap.bone')
        @slot('name', 'Образовательные и деловое мероприятия')
            <ul class="-lineHeight void">
                <li>Семинары</li>
                <li>Спикер на медицинских конференциях</li>
            </ul>
        @endcomponent

        
    </div>


 </div>

@endcomponent