@component('UTIN._wrap.A4.index', ['css' => $css ?? null, 'loop' => 'Radio'])
 
@slot('head')
@component('UTIN._wrap.Font')
    @slot('name','Радио')
    {{-- <div class="_p Grey">Создание экспертного контента на сторонних площадках. Устанавливание и поддержание контактов с журналистами, редакторами и другими представителями СМИ для обеспечения видимости медицинских инициатив и экспертного мнения.</div> --}}
@endcomponent
@endslot

 


 <div class="Golden cross-xs">
    <div class="_l Plot -h -S / Bone / space bg-white round-m">

        <div>
            <div class="paragraph-s"></div>
            <div class="h">Ресурсы</div>
        </div>
        
 
        <div class="_body">
            <div class="content-s b600">Федеральные каналы</div>
            <div class="paragraph"></div>



            МАЯК
            ВЕСТИ FM

        

            <div class="p">29 сентября, в мире отмечается Всемирный день сердца</div>

            В грядущее воскресенье, 29 сентября, в мире отмечается Всемирный день сердца (World Heart Day), учреждённый в 1999 году по инициативе Всемирной федерации сердца. Цель праздника повысить осознание в обществе опасности, которая вызвана эпидемией сердечно-сосудистых заболеваний.
            Чем и для кого низкий пульс может быть опасен? Как часто должен мерить давление здоровый человек среднего возраста? О мифах и правда относительно заболеваний сердца рассказал кардиолог Алексей Утин.

            https://smotrim.ru/video/1945630

            @include('UTIN._brick.interview')
        </div>
        

    </div>
    <div class="_r round-m space void-m bg-blue">

        <div>
            <div class="paragraph-s"></div>
            <div class="h">Что нужно</div>
        </div>
 

        <div class="p wide Blog">Veniam pariatur laboris exercitation magna exercitation duis exercitation laboris fugiat consequat cillum velit veniam eiusmod.</div>
    </div>
 </div>

@endcomponent