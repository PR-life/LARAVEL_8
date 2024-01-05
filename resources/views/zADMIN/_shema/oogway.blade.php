@component('zADMIN._shema._wrap.oogway')
     
@slot('push')

    @push('css-body', 'x-aside2 aside2Close55 ')

    
@endslot


<?php 

    $array = array(

        [	
            "id" => '10',
            "name" => 'Пятигорск. Демонстрация прибора. Конец сентября – начало октября',
            "description" => 'Предлагаю запустить текущую рекламную компнаию в этом регионе, с описанием мероприятия и формой записи на него',
            "new" => true,
            // "cssTag" => '-blue',
        ],

        [	
            "id" => '9',
            "name" => 'Статья про лохотроны',
            "description" => 'Подготовить страницу с интрукцией "Как проверить сайт на мошеннечество"',
        ],

        [	
            "id" => '1',
            "name" => 'Бизнес-поддержка',
            "description" => 'проработка раздела',
        ],

        [	
            "id" => '8',
            "name" => 'Перевод сайта',
            "description" => 'Подготовка контента для En и De версии сайта',
        ],
        [	
            "id" => '7',
            "name" => 'Этап 1',
            "description" => 'рекламная компания на статью "Метод Фолля"',
            "tag" => 'Реклама',
            "cssTag" => '-blue',
        ],
        [	
            "id" => '6',
            "name" => 'Этап 1',
            "description" => 'Доработка разделов "Фолль" и "Биорезонанс"',
            "tag" => 'SEO',
            "cssTag" => '-green',
        ],
        // [	
        //     "id" => '5',
        //     "name" => 'Сайт для Юлии',
        //     "description" => 'Сайт под личный бренд, чтобы находить клиентов и получать заказы',
        // ],
        // [	
        //     "id" => '4',
        //     "name" => 'Разработка Личного кабинете',
        //     "description" => 'в работе версия 1.0',
        // ],
        // [	
        //     "id" => '3',
        //     "name" => 'Разработка Админ панели',
        //     "description" => 'в работе версия 3.0',
        // ],
        // [	
        //     "id" => '2',
        //     "name" => 'Разработка Шаблона сайта',
        //     "description" => 'в работе версия 2.0',
        //     // "tag" => '5555',
        //     // "cssTag" => '5555',
        // ],
    );
?>



@push('milk')


<div id="Aside_2" class="Fix on HWin / Aside_2 x-asideClose / Branch55 index">
    {{-- <div class="fix"> --}}

        <div id="TopBranch" class="Top -h / flex bC cI space-left / Abs -lt -r / bg _indexMax">
            <div class="_l">
                <ul class="Bread / flex noEvents">

                    <li class="flex">
                        <span class="Ico -XS / mr-2">

                            {{-- <svg viewBox="0 0 16 16">
                                <path fill="currentColor" d="M5 5.372v.878c0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75v-.878a2.25 2.25 0 1 1 1.5 0v.878a2.25 2.25 0 0 1-2.25 2.25h-1.5v2.128a2.251 2.251 0 1 1-1.5 0V8.5h-1.5A2.25 2.25 0 0 1 3.5 6.25v-.878a2.25 2.25 0 1 1 1.5 0ZM5 3.25a.75.75 0 1 0-1.5 0 .75.75 0 0 0 1.5 0Zm6.75.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm-3 8.75a.75.75 0 1 0-1.5 0 .75.75 0 0 0 1.5 0Z"></path>
                            </svg> --}}
{{-- 
                            <svg viewBox="0 0 16 16">
                                <path fill="currentColor" d="M1.5 3.25a2.25 2.25 0 1 1 3 2.122v5.256a2.251 2.251 0 1 1-1.5 0V5.372A2.25 2.25 0 0 1 1.5 3.25Zm5.677-.177L9.573.677A.25.25 0 0 1 10 .854V2.5h1A2.5 2.5 0 0 1 13.5 5v5.628a2.251 2.251 0 1 1-1.5 0V5a1 1 0 0 0-1-1h-1v1.646a.25.25 0 0 1-.427.177L7.177 3.427a.25.25 0 0 1 0-.354ZM3.75 2.5a.75.75 0 1 0 0 1.5.75.75 0 0 0 0-1.5Zm0 9.5a.75.75 0 1 0 0 1.5.75.75 0 0 0 0-1.5Zm8.25.75a.75.75 0 1 0 1.5 0 .75.75 0 0 0-1.5 0Z"></path>
                            </svg> --}}


                            <svg viewBox="0 0 16 16">
                                <path fill="currentColor" d="M9.5 3.25a2.25 2.25 0 1 1 3 2.122V6A2.5 2.5 0 0 1 10 8.5H6a1 1 0 0 0-1 1v1.128a2.251 2.251 0 1 1-1.5 0V5.372a2.25 2.25 0 1 1 1.5 0v1.836A2.493 2.493 0 0 1 6 7h4a1 1 0 0 0 1-1v-.628A2.25 2.25 0 0 1 9.5 3.25Zm-6 0a.75.75 0 1 0 1.5 0 .75.75 0 0 0-1.5 0Zm8.25-.75a.75.75 0 1 0 0 1.5.75.75 0 0 0 0-1.5ZM4.25 12a.75.75 0 1 0 0 1.5.75.75 0 0 0 0-1.5Z"></path>
                            </svg>
 

                        </span>
                        <span class="content-xs">Ветки</span>
                    </li>

                </ul>
            </div>
        </div>


        <div class="Scroll -scroll / hidden">
            <div class="_scr / Shift -left -stepScroll shift-space">
                <div class="_fix / index">
                    <div class="Top -h"></div>
                    @include('zADMIN._shema.mod.branch.index')
                </div>
            </div>
        </div>
</div>

@endpush

@endcomponent