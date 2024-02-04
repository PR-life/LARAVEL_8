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
            <div class="content b600">Подходящие издания</div>
        </div>
        
 
        <div class="_body / Details -edge">

            <div class="paragraph [ padding top ]"></div>


            <details>
                <summary class="-S">Интернет-издание<i></i></summary>
                <div class="_edge void net">
                    <div class="paragraph net"></div>

               
                    <div class="content b600 / net">Экспертные комментарии в СМИ</div>

                    {{-- <div class="content">Комментарий в СМИ - это мощное средство привлечения внимания. Мы помогаем вам стать медийной личностью, вставляя ваше экспертное мнение в статьи печатных и интернет-изданий. Мы гарантируем, что ваша цитата соответствует теме материала и сопровождается всей необходимой информацией о вас и вашей компании.</div> --}}

                    @include('UTIN._brick.ico_smi')
                    <div class="paragraph net"></div>
                    <div class="content b600 / net">Цель</div>
                    <div class="paragraph-s net"></div>
                    <div class="content / net">Попасть в авторский пул редакций, когда редакторы сами связываются с экспертом.</div>                    

                    <div class="content a" data-click data-goto='milk_smiExample' data-foo='click'>Примеры свежих запросов</div>
                </div>
            </details>

            <details>
                <summary class="-S">Интернет-ресурсы<i></i></summary>

                <div class="_edge void net">
                    <div class="paragraph net"></div>

                    
                    <div class="content / net">В эту категорию относим "Новые медиа", региональные СМИ и прочие площадки для публикации статей.</div>

                    <div class="content a" data-click data-goto='milk_smiExampleLite' data-foo='click'>Примеры свежих запросов</div>

                </div>
            </details>
                         
        </div>
        

    </div>
    <div class="_r round-m space / bg-blueFon">

            <div class="paragraph"></div>
            <div class="h2 familyDinPro b600">Услуги агентства</div>
            <div class="paragraph"></div>
    

            <div class="void">
                <ul class="-service ul -S">
                    <li data-click data-goto='milk_smiAnswer' data-foo='click'>Ищем запросы от журналистов (<span class="a">подробнее</span>)</li>
                    <li data-click data-goto='milk_smiInterview' data-foo='click'>поиск возможностей для интервью (<span class="a">подробнее</span>)</li>
                    <li data-click data-goto='milk_smiPressReleases' data-foo='click'>рассылка пресс-релизов (<span class="a">цены</span>)</li>
                    <li>платные публикации (<span class="a" data-click data-goto='milk_smiPay' data-foo='click'>цены</span>)</li>
                </ul>
    
                <div class="paragraphX2 net"></div>
                <div class="paragraph-s net"></div>
    
                <div class="Citation -M -left -mbl -mblPC">
                    <div class="_right">
                    <div class="content content-m wide round-s">Медийное продвижение - это не мгновенный процесс. Отношения с журналистами строятся постепенно, и именно здесь наше агентство проявляет свой профессионализм. Мы создаем прочные связи, отвечаем на запросы четко и оперативно, и обеспечиваем вам постоянный поток запросов от целевых СМИ.</div>
                    <div class="author content-xxs">— Life, связи с общественностью</div>
                    </div>
                </div>


            </div>

 


            <div class="paragraph"></div>
    </div>
 </div>

@endcomponent