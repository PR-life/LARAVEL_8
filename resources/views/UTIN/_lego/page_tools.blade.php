@component('UTIN._wrap.A4.index', ['css' => $css ?? null,'cssPlot' => '-h -mbl', 'loop' => 'tools'])

    @slot('cssHead','space-m')
    @slot('cssBody','space-s')

    @slot('head')
        @component('UTIN._wrap.Font')
            @slot('name','Инструменты и методы')
            <div class="_p Grey / Blog">Задейстоввать нужные для достижения поставленных целей</div>
        @endcomponent
    @endslot


 

 

 <div class="Abs_PC -all / flex / bg-blueFon space-s round">

    <div class="Grid x4 -gapS / Void void">
        @component('UTIN._lego.wrap.bone')
        @slot('name', 'Медиа и СМИ')
            <ul>
                <li>ТВ-каналы</li>
                <li>СМИ</li>
                <li>Радио</li>
            </ul>
        @endcomponent

 
        @component('UTIN._lego.wrap.bone')
        @slot('name', 'Контент-маркетинг')
            
        @endcomponent


        @component('UTIN._lego.wrap.bone')
        @slot('name', 'Блоггеры <br>и просветительская деятельность')
            
        <ul>
            <li>Блоггеры</li>
            <li>Инфлюенсеры</li>
        </ul>
 
        @endcomponent
 


        @component('UTIN._lego.wrap.bone')
        @slot('name', 'Образовательные мероприятия')
            <ul>
                <li>спикер на медицинских конференциях, семинарах</li>
            </ul>
        @endcomponent

        
    </div>


 </div>

@endcomponent