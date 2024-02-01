@component('UTIN._wrap.A4.index', ['css' => $css ?? null, 'loop' => 'Radio'])
 
@slot('cssHead','space-m')
@slot('head')
@component('UTIN._wrap.Font')
    @slot('name','Эфир на радио')
    {{-- <div class="_p Grey">Участие в эфире радио в качестве эксперта или гостя</div> --}}
@endcomponent
@endslot

 


 <div class="Golden cross-xs_PC / void-s void-mbl space-s">
    <div class="_l Plot -hMin -S / Bone / space bg-white round-m">

        <div>
            <div class="paragraph-s"></div>
            <div class="content b600">Участие в эфире</div>
        </div>
        
 
        <div class="_body / Details -edge">

            <div class="paragraph [ padding top ]"></div>

            <details>
                <summary class="-S">В качестве эксперта <i></i></summary>
                <div class="_edge55 void">
 

                    
                    {{-- <div class="Citation -mblPC -mbl -M -left"> --}}
                    <div class="Citation -M -left -mbl -mblPC / aura">
                            <div class="_right">
                            <div class="content round-s">
                                В вашей категории на телевидении и радио есть очень доброжелательные площадки -  это <span class="b600">утренние эфиры</span>, там гости нужны всегда. 
                                <br><br>Попробуйте представить себе задачу найти и пригласить 365 компетентных экспертов в течение года, и вы поймете трудности, с которыми сталкивается редактор.
                                <br><br>
                                <br><br>
                                <figure class="blockquote vol-2 x-airM">
                                    <blockquote>
                                        <div class="hMin / family-2">на радио <br>есть спрос на хороших экспертов</div>
                                    </blockquote>
                                </figure>
                                <br><br>
                            </div>
                            <div class="author">— Life, <span class="Grey">связи с общественностью</span></div>
                            </div>
                        </div>

    
                </div>
            </details>

            <details>
                <summary class="-S">В качестве гостя в студии <i></i></summary>
                <div class="_edge55 void">
 

                    
                    <div class="Citation -mblPC -mbl -M -left">
                        <div class="_right">
                        <div class="content round-s">Для приглашения в качестве гостя акцентируем внимание на профессиональных праздниках и ключевых событиях, которые предоставляют отличные возможности для приглашения вас в качестве гостя. Например, Всемирный день сердца 29 сентября отлично подходит для подготовки и получения значимого эфира.</div>
                        <div class="author">— Life, <span class="Grey">связи с общественностью</span></div>
                        </div>
                    </div>

    
                </div>
            </details>
            

            {{-- 4555555555555 --}}
            {{-- https://smotrim.ru/video/1945630 --}}
        </div>
        

    </div>
    <div class="_r round-m space bg-blueFon">

 
 
            <div class="paragraph"></div>
            <div class="h2 familyDinPro b600">Услуги агентства</div>
            <div class="paragraph"></div>

            <div class="void">
                <ul class="-service ul -S">
                    <li>поиск возможностей для интервью (<span class="a" data-click data-goto='milk_smiInterview' data-foo='click'>подробнее</span>)</li>
                </ul>

                <div class="paragraphX2 net"></div>
                <div class="paragraph-s net"></div>

                <div class="Citation -M -left -mbl -mblPC">
                    <div class="_right">
                    <div class="content content-m wide round-s">Мы создаем возможности для вас по участию в радиоэфире. Это может быть как роль эксперта, предоставляющего профессиональные знания, так и гостя, обсуждающего актуальные темы.</div>
                    <div class="author content-xxs">— Life, связи с общественностью</div>
                    </div>
                </div>


        </div>
    </div>
 </div>

@endcomponent