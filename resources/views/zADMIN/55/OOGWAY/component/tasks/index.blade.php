<div class="flex / Golden -left_60 vol-task">

    <div class="_l / pr-2">


        <div class="flex cI / cross-xs">
            <div class="content / Grey">Задачи</div>
            @include('zADMIN.OOGWAY.component.tasks.menu')
        </div>

        <div class="paragraphX2"></div>

        <div id="package_Task" localstorage-controlCss findCssInHtml param-id="menu_FilterTask">

            <div class="Abs -lt -r none / h b100 space">АКТИВНЫХ ЗАДАЧ НЕТ</div>

            <div class="Ef -list / relative void-s hidden">

                @foreach($oogway->tasks as $task)

                    @component('component.Task.test', ['Var' => $task])

                        {{-- @slot('fix')
 
                        @endslot --}}

                    @endcomponent

                @endforeach




    </div>
</div>



 
 