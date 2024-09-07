<div class="flex / Golden -left_60 vol-task">

    <div class="_l / pr-2">


        <div class="flex cI / cross-xs">
            <div class="content / Grey">Задачи</div>
            <ul id="menu_FilterTask" class="menu -tag -S / lie pointer" 
                data-click data-switch data-package='package_Task' 
                data-stop
                data-localstorage localstorage-id='switch' data-check='active'
                >
                <li class="active" data-item='1' data-packagetype='css' data-packagefoo="radio" package='all first'><span class="a / noEvents round-s">все</span></li>
                <li data-item='2' data-packagetype='css' data-packagefoo="radio" package='myObserver'><span class="a / noEvents round-s">нужна моя проверка</span></li>
                <li data-item='3' data-packagetype='css' data-packagefoo="radio" package='myContract'><span class="a / noEvents round-s">я исполнитель</span></li>
                <li data-item='4' data-packagetype='css' data-packagefoo="radio" package='myTask'><span class="a / noEvents round-s">я автор</span></li>
            </ul>
        </div>

        <div class="paragraphX2"></div>

 
        <div id="package_Task" localstorage-controlCss findCssInHtml param-id="menu_FilterTask">

            <div class="Abs -lt -r none / h b100 space">ПОХОЖИХ ЗАДАЧ НЕТ</div>


            <div class="Ef -list / relative void-s">

 
                {{-- @dd($oogway->tasks) --}}


                @component('component.Task.index',['css' => 'myObserver'])
                    @slot('status', 417)
                    @slot('name')
                    {{-- Подготовить текст для Рассылки с приглашением зарегистрироваться: <a href="https://sensitivego.store/ru/contacts/test-the-device" target="_blank">Где пройти Диагностику</a> --}}
                    @endslot

                    @slot('fix')
                    <div class="White">
                        <div class="HMin space-m / bg round">
                            <div class="text">
                                <p>_____ (имя), мы запускаем услугу "<a href="https://sensitivego.store/ru/support/business" target="_blank">Бизнес поддержка</a>" для привлечения новых клиентов нашим партнерам.</p>
                                <p>Зарегистрируйтесь по <a href="https://sensitivego.store/response/map" target="_blank">ссылке</a>, и мы добавми информацию о вас на карту "<a href="https://sensitivego.store/ru/contacts/test-the-device" target="_blank">Где пройти диагностику?</a>".</p>
                                <h4>Остались вопросы?</h4>
                                <p>Позвоните нашему менеджеру по номеру +7 9** *** ** **, чтобы узнать подробности.</p>

                                <div class="content Grey">вариант второй</div>
                                <div class="content Grey">Напишите нашему менеджеру на почту ***@yandex.ru, чтобы узнать подробности.</div>
                                <h4>Компания Альфа-Мед</h4>
                                <p><em>— помогаем развивать и систиматизировать рабочие процессы нашим партнерам</em></p>
                            </div>
                        </div>
                    </div>
                    @endslot

 
                @endcomponent


                @component('component.Task.index',['css' => 'myObserver'])
                    @slot('status', 417)
                    @slot('name')
                    {{-- Создать Карту с метками "Где пройти Диагностику", пока для демонстрации --}}
                    @endslot


                    @slot('fix')
                    <div class="White">
                        <div class="HMin space / bg round">
                            {{-- @include('zADMIN.OOGWAY._lego.map') --}}
                        </div>
                    </div>
                    @endslot


                @endcomponent




                @component('component.Task.index')
                    @slot('status', 102)
                    @slot('name')
                    {{-- Протестировать Анкету "<a href="https://sensitivego.store/response/map" target="_blank">Поможем клиентам найти вас</a>" --}}
                    @endslot

                    @slot('sms')
                    Прислать контакт кому отправить приглашение для теста Анкеты
                    @endslot


                @endcomponent

                {{-- @component('component.Task.index',['css' => 'myContract'])
                    @slot('name')
                    Прислать контакт кому отправить приглашение для теста <a href="https://sensitivego.store/response/map" target="_blank">Анкеты</a>
                    @endslot

                @endcomponent --}}

                {{-- @component('component.Task.index')
                    @slot('name')
                    Текст для поля "<em>О себе в свободной форме</em>" в анкете <a href="https://sensitivego.store/response/map">Поможем клиентам найти вас</a>
                    @endslot
                @endcomponent --}}
                

                {{-- @component('component.Task.index',['css' => 'done'])
                    @slot('status', 200)
                    @slot('name')
                    подготовить <a target="_blank" href="https://sensitivego.store/ru/support/business">макет страницы</a>
                    @endslot
                @endcomponent --}}


                {{-- @component('component.Task.index',['css' => 'done']))
                    @slot('status', 200)
                    @slot('name')
                    подготовить Предложения и Анкеты
                    @endslot
                @endcomponent --}}



            </div>


            
        </div>
 

    </div>





    <div class="_r / owlMin">
        <div class="flex cI / cross-xs">
            <div class="content / Grey">Вопросы</div>
            <ul class="menu -tag -XS / lie">
                <li class="active"><span class="a / noEvents round-s">все</span></li>
                <li><span class="a / noEvents round-s">для меня</span></li>
                <li><span class="a / noEvents round-s">я автор</span></li>
            </ul>
        </div>
    
        {{-- <div class="paragraphX2"></div> --}}




        <div class="Chat -entropy / Entropy Void Edge / space">

            <div class="Q / face face-padding face-top face-xs" data-click="" data-css="" data-toggle="On">
                <div class="_wrap relative">
                    <div class="content / Void / lineClamp var-3 owl-lineClamp / pointer">
                        <p>
                            нужен ли аналог текущего раздела для En версии?
                        </p>
                    </div>
                </div>
                <div class="Preamble -row -S">
                    <div class="content-s / Grey">Алексей</div>
                    <div class="content-s / Grey">
                        23.07, 19:03
                    </div>
                </div>
            </div>
        </div>










    </div>
</div>



 
 