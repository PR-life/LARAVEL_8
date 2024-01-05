<div class="flex -wrap / x-achievement / cloud">
    @component('zMY._wrap.wagon.index', ['css' => 'bg-tool'])

        @slot('text_top', 'Статус')
        @slot('text_bottom')
            @foreach($roles as $id => $role)
                @if(auth()->user()->role == $id)
                    <span class="content-s">
                        {{$role}}
                    </span>
                @endif
            @endforeach
        @endslot

        @slot('fix')

            <div class="h">Мой статус</div>

            <div id="tabMyStatus" class="Tabs {{auth()->user()->role <= 40 ? '-x2' : ''}} {{auth()->user()->role <= 10 ? '-x3' : ''}}">

                <div class="void">
                    <div class="inline">
                        <ul class="menu -tag / Kite kite-space kite-round / pointer" data-click data-switch data-package='tabMyStatus'
                            data-stop>
                            <li data-item='1' data-packagetype='css' data-packagefoo='radio' package='Tabs -x1' {!!auth()->user()->role >= 50 ? 'class="active"' : ''!!}>
                                <span class="block Ellipsis / noEvents">Читатель</span>
                            </li>
                            <li data-item='2' data-packagetype='css' data-packagefoo='radio' package='Tabs -x2' {!!auth()->user()->role == 40 ? 'class="active"' : ''!!}>
                                <span class="block Ellipsis / noEvents">Автор</span>
                            </li>
                            @can('owner',auth()->user())
                            <li data-item='3' data-packagetype='css' data-packagefoo='radio' package='Tabs -x3 -x2' class="active">
                                <span class="block Ellipsis / noEvents">Руководство</span>
                            </li>
                            @endcan
                        </ul>
                    </div>

                    <div class="paragraph-s / net"></div>
                    <div class="text">
                        <ul class="x-menu -S vol-check c2 / slim">
                            <li><a href="{{route('my.bookmarks')}}">Сохраняйте в закладки</a></li>
                            <li><a href="{{route('my.reviews')}}">Публикуйте отзывы</a></li>
                            <li><a href="{{route('my.comments')}}">Отслеживайте свои комментарии</a></li>
                            <li class="_tab x2 / role-40"><a href="{{route('my.paper')}}">Публикуйте свои статьи</a></li>
                            <li class="_tab x2 / role-40"><a href="{{route('my.course')}}">Публикуйте свои курсы</a></li>
                            @can('owner',auth()->user())
                                <li class="_tab x3"><a href="{{route('admin.morda')}}">Доступ в админ панель</a></li>
                            @endcan
                        </ul>
                    </div>

                    <div class="inline">
                        @can('reader',auth()->user())
                            <div class="_tab x2 [ margin top XS ]">
                                <a class="Btn round / transparent" href="{{route('my.form.paper')}}">
                                    <span class="Ico -S / mr-1">
                                        @svg('plus')
                                    </span>
                                    активировать
                                </a>
                            </div>
                        @endcan
                    </div>
                </div>


            </div>

        @endslot

        <div class="Abs -rt / orb-s">
            @svg('tool')
        </div>

    @endcomponent


    @can('owner',auth()->user())
        @component('zMY._wrap.wagon.index', ['css' => 'bg-dark -Black black-linearGradien'])
            @slot('text_top')
                @foreach($roles as $id => $role)
                    @if(auth()->user()->role == $id)
                        <span class="content-s">
                            {{$role}}
                        </span>
                    @endif
                @endforeach
            @endslot
            @slot('text_bottom', 'Доступ в <br>админ панель')
            <div class="Abs -rb / orb">
                <div class="Ico">
                    <svg viewbox="0 0 13 10"><g fill='#5cdc0a' fill-rule='evenodd'><path d='M.49 5.768l1.414-1.414 4.242 4.242-1.414 1.414z'/><path d='M3.318 8.596L11.096.818l1.414 1.414-7.778 7.778z'/></g></svg>
                </div>
            </div>
            <a class="Abs -all _indexMax" href="{{route('admin.morda')}}"></a>
        @endcomponent
    @endcan


</div>



