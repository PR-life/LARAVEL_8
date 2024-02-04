@component('zUTIN._wrap.A4.index', ['css' => $css ?? null, 'loop' => 'TV'])
 
@slot('cssHead','space-m')

@slot('head')
@component('zUTIN._wrap.Font')
    @slot('name','ТВ-каналы')
    <div class="_p Grey">Как стать экспертом на федеральном телевидении</div>
@endcomponent
@endslot


{{-- //////////////////////////////////////////////////// --}}
{{-- https://navika.pro/digital/posts/kak-popast-na-televidenie-v-kachestve-eksperta?ysclid=lrvse8hlhp12627550 --}}

 <div class="Golden cross-xs_PC / void-s void-mbl space-s">
    <div class="_l Plot -hMin -S / Bone / space bg-white round-m">

        <div>
            <div class="paragraph-s"></div>
            <div class="content b600">В качестве эксперта</div>
        </div>
 

        <div class="_body [ padding top ]">
            <div class="hill-s none_PC"></div>






            <div class="_body / Details -edge">

                <div class="paragraph [ padding top ]"></div>
    
    
                        
                <figure class="space">
                    <div class="hMin b600 center-text">Почему не стоит платить за участие на телевидение <br class="none_mbl">в качестве эксперта</div>
                    <div class="paragraph"></div>   
                    <audio class="W-100" controls>
                        <source src="/Utin/talk.mp3" type="audio/mpeg">
                        <div class="content">
                            Your browser does not support HTML audio, but you can still
                            <a href="/Utin/talk.mp3">download the music</a>.
                        </div>
                    </audio>
                    <figcaption class="-edge -b / center-text">
                        <span class="content-xs" style="color: inherit">мнение корреспондента, <br class="none_mbl">с 15-летним стажем работы на федеральном ТВ</span>
                    </figcaption>
                </figure>

                <div class="paragraphX2"></div>


                <details>
                    <summary class="-S">Как работаем <br class="none_PC">с ТВ-каналами из ТОП-10<i></i></summary>
                    <div class="_edge void">
                       
                        <div class="content">
                            Важно, чтобы ваша экспертность была видна в обществе. Это включает в себя активность в СМИ, публикации статей, участие в мероприятиях и конференциях (<span class="a" data-click data-goto='milk_tvExpert' data-foo='click'>подробнее</span>).
                        </div>
 
                        <div class="content">Посмотреть список каналов - <a href="https://www.mlg.ru/ratings/media/" target="_blank">ссылка</a></div>
         
        
                    </div>
                </details>
    
                <details>
                    <summary class="-S">Как работаем <br class="none_PC">с каналами 2-го мультиплекса <i></i></summary>
    
                    <div class="_edge void">
                        {{-- <ul class="ul -S"> --}}
                            <div class="content">Можно заплатить и получить производство отдельного сюжета <span class="a" data-click data-goto='milk_tvPay' data-foo='click'>(пример)</span></div>
                        {{-- </ul> --}}
                    </div>
                </details>
    
    
                
            </div>
        </div>
    </div>




    <div class="_r round-m space / bg-blueFon">

        <div class="paragraph"></div>
        <div class="h2 familyDinPro b600">Услуги агентства</div>
        <div class="paragraph"></div>


        <div class="void">

            <ul class="-service ul -S">
                <li data-click data-goto='milk_tvExpert' data-foo='click'>почему Экспертам мы не предлагаем услугу "заплати и получи эфир" на ТВ-каналах из ТОП-10 (<span class="a">подробнее</span>)</li>
                <li data-click data-goto='milk_tvPay' data-foo='click'>заказать сюжет на телевидении (<span class="a">пример</span>)</li>
                <li>поиск возможностей для интервью</li>
                <li>рассылка пресс-релизов</li>
            </ul>

            <div class="paragraphX2 net"></div>
            <div class="paragraph-s net"></div>

            <div class="p b600">В ближайшие 6 месяцев<span class="Sup"><span class="_sup">*</span></span> <span class="ghost">_</span>рекомендуем:</div>
            <ul class="-S ul">
                
                <li>
                    поработать над управлением своим голосом (в этом может помочь личный тренер)
                    <span class="block center-text space-s bg-blue">
                        <span class="Info / -ico ico-center ico-s vol-2 / block">
                            <span class="content">по запросу можем прислать список кому доверяем</span>
                        </span>
                    </span>
                    <br>
                </li>
                <li>принимать участие в эфирах с нецелевой аудиторией, это поможет наработать собственный авторский стиль</li>
            </ul>


            <div class="content-xxs wide / space">
                <span class="Sup"><span class="_sup -left">*</span></span>29 сентября отмечается Всемирный день сердца - запрос на ваше экспертное мнение в медиа к этой дате будет высоким
            </div>
 
        </div>
    </div>
 </div>

@endcomponent