@component('_wrap.Utin.index', ['loop' => 'Pay'])
    {{-- @slot('cssPlot', '-h') --}}
    {{-- @slot('cssHead','space-m') --}}

    @slot('head')
    <div class="h b500">Формат работы</div>
    <div class="paragraph"></div>
    @endslot



    <div class="H-100 _off">

        {{-- <div class="center-text">
            <div class="h1"><span class="Sub"><span class="_sub -left / Grey">до</span></span> 50 000</div>
            <div class="paragraph"></div>
            <div class="content">прошлый месяц: 45 000</div>
        </div>
        <div class="hill"></div> --}}

 

        <div class="Golden cross-xs_PC / void-s void-mbl space-s">
            <div class="_l Plot -hMin -S / Bone / space bg-white round-m">
        
                <div>
                    <div class="paragraph-s"></div>
                    <div class="content b600">Постоплатная система</div>

                    <div class="hill"></div>
                    <div class="h">10 000 <span class="content-xs">р/мес</span></div>
                    <div class="Info -ico ico-left -space / content Grey"> Пока рекламный бюджет не превысит 30 000 в месяц, далее 30% от бюджета</div>
                </div>
         
        
                <div class="_body [ padding top ]">
                    <div class="hill-s none_PC"></div>
        
        
        
        
        
        
                    <div class="_body / Details -edge">
        
                        <div class="paragraph [ padding top ]"></div>
            
 
        
        
                        <details>
                            <summary class="-S">Реклама<i></i></summary>
                            <div class="_edge void">
                               
                                <div class="content">
                                    Перенастройка и Ведение рекламной компании.
                                </div>                
                            </div>
                        </details>
            
                        <details>
                            <summary class="-S">SEO <i></i></summary>
            
                            <div class="_edge void">
                                <div class="content">
                                    ....
                                </div>      
                            </div>
                        </details>
                        <details>
                            <summary class="-S">Битрикс <i></i></summary>
            
                            <div class="_edge void">
                                <div class="content">
                                    Наполнение товарного каталога
                                </div>      
                            </div>
                        </details>
            
                        
                    </div>
                </div>
            </div>
        
        
        
        
            <div class="_r round-m space / bg-blueFon">
        
                <div class="paragraph"></div>
                <div class="h2 familyDinPro b600">Оплата</div>
                <div class="paragraph"></div>
        


                <div class="TransferCard / Wagon -w -wM / Bone">

                    <div class="_head / space">
                        <div class="void">
                            <div class="content">Переводы</div>
                        </div>
                        <div class="paragraph"></div>
                    </div>
                
                    <div class="_footer / space-m void-m">
                        @component('_wrap.TransferCard.wrap.index')
                            @slot('name', 'Январь')
                            {{-- @slot('date', 'Декабрь') --}}
                        @endcomponent
                        @component('_wrap.TransferCard.wrap.index')
                            @slot('name', 'Декабрь')
                            {{-- @slot('date', 'Декабрь') --}}
                        @endcomponent
                    </div>
                </div>
 


        
                <div class="void">
        
                    {{-- <ul class="-service ul -S">
                        <li data-click="" data-goto="milk_tvExpert" data-foo="click">почему Экспертам мы не предлагаем услугу "заплати и получи эфир" на ТВ-каналах из ТОП-10 (<span class="a">подробнее</span>)</li>
                        <li data-click="" data-goto="milk_tvPay" data-foo="click">заказать сюжет на телевидении (<span class="a">пример</span>)</li>
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
                    </div> --}}
         
                </div>
            </div>
         </div>


    </div>


 
@endcomponent