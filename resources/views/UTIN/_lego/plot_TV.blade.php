@component('UTIN._wrap.A4.index', ['css' => $css ?? null, 'loop' => 'TV'])
 
@slot('head')
@component('UTIN._wrap.Font')
    @slot('name','ТВ-каналы')
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
            <div class="content">55555555555555</div>


            <div class="paragraphX2"></div>
            <div class="content-s b600">Информационный телеканал</div>
            <div class="paragraph"></div>

            <ul class="-S">
                <li>производство отдельного сюжета</li>
                <li>интервью</li>
                <li>интеграцию в эфир топ-проектов телеканалов</li>
            </ul>


            <div class="inline">
                https://mirtv.ru/video/64383/
                <span class="Btn cC">подробнее</span>

                https://doc-tv.ru
            </div>


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