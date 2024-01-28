@component('UTIN._wrap.A4.index', ['css' => $css ?? null, 'loop' => 'SMI'])

@slot('cssHead','space-m')
@slot('head')
@component('UTIN._wrap.Font')
    @slot('name','СМИ')
    {{-- <div class="_p Grey">Создание экспертного контента на сторонних площадках.</div> --}}
@endcomponent
@endslot
 

 <div class="Golden cross-xs_PC / void-s void-mbl space-s">
    <div class="_l Plot -hMin -S / Bone / space bg-white round-m">

        <div>
            <div class="paragraph-s"></div>
            <div class="content b600">Площадки</div>
        </div>
        
 
        <div class="_body / Details -edge">

            <div class="paragraph [ padding top ]"></div>


            <details open>
                <summary class="-S">Интернет-издание<i></i></summary>
                <div class="_edge void net">
                    <div class="paragraph net"></div>
                    <div class="content b600 / net">Цель</div>
                    <div class="paragraph-s net"></div>
                    <div class="content / net">Попасть в авторский пул федеральных СМИ, когда редакторы сами связываются с экспертом.</div>                    
                    @include('UTIN._brick.ico_smi')

                    <div class="content a" data-click data-goto='milk_smiExample' data-foo='click'>Примеры свежих запросов на поиск экспертного мнения</div>
                </div>
            </details>

            <details>
                <summary class="-S">Интернет-ресурсы<i></i></summary>

                <div class="_edge void net">
                    <div class="paragraph net"></div>

                    
                    <div class="content / net">В эту категорию относим "Новые медиа", региональные СМИ и прочие площадки для публикации статей.</div>

                    <div class="content b600">Примеры свежих запросов</div>

                    <ul class="ul -S">
                        <li class="a content">Южный федеральный | Общественно-политический информационный портал</li>
                        https://pressfeed.ru/query/139151
                        <li class="a content">Питерские заметки</li>
                        https://deadline.media/feed/?query=12959
                    </ul>
                    
                    {{-- <p>https://lifehacker.ru/kak-zamedlit-serdcebienie/</p> --}}
                    {{-- <p>https://interviewage.ru/</p> --}}
                    {{-- ultra Lite --}}
                    {{-- <p>https://zhizn-zvezd.ru/mariya-chajkovskaya-biografiya-doktora-kardiologa/</p> --}}
                </div>
            </details>
            <details>
                <summary class="-S">Журналы<i></i></summary>
                <div class="_edge void net">
                    <div class="paragraph net"></div>
                    {{-- <div class="content">Медицинские журналаы ранее не работали.</div> --}}
                    <div class="content">Публикации в глянцевых журналах - 99.7% платная история</div>
                </div>
                {{-- https://www.rmj.ru/articles/kardiologiya/ --}}


            </details>
            <div class="paragraphX2"></div>

            
        </div>
        

    </div>
    <div class="_r round-m space / bg-blueFon">

        {{-- <div> --}}
            <div class="paragraph-s"></div>
            <div class="h">Услуги агентства</div>
            <div class="paragraph"></div>

            <div class="Info -ico ico-left vol-2">
                <div class="content">Устанавливание и поддержание контактов с журналистами и редакторами для обеспечения видимости медицинских инициатив и экспертного мнения.</div>
            </div>
            <div class="paragraphX2"></div>


            <ul class="ul vol-dot void">
                <li>ответы на запросы журналистов (<span class="a" data-click data-goto='milk_smiAnswer' data-foo='click'>подробнее</span>)</li>
                <li>поиск возможностей для интервью (<span class="a" data-click data-goto='milk_smiInterview' data-foo='click'>подробнее</span>)</li>
                <li>платные публикации (<span class="a" data-click data-goto='milk_smiPay' data-foo='click'>подробнее</span>)</li>
            </ul>



            <div class="paragraph"></div>
    </div>
 </div>

@endcomponent