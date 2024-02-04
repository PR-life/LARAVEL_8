@component('UTIN._wrap.A4.start', ['css' => $css ?? null, 'loop' => '1'])

@slot('head')
@component('UTIN._wrap.Font')
    @slot('css','-M')
    @slot('name','Содержание')
    <div class="_p Grey">Определить бюджет</div>
@endcomponent
@endslot

<div class="paragraphX2"></div>

<div class="text">
    <ul class="vol-dot -dot -M / x-table / JsScroll">
        <li>
            <a href="#page_tools">Этап 1: Подбор ресурсов</a>            
            <span class="paragraph mome_mbl"></span>
        </li>
        <li class="Grey">
            <span class="Wings">
                <div class="_win -t">
                    <span class="inline">
                        <span class="Badge -S -solo -blue">
                            <span>не приступили</span>
                        </span>
                    </span>
                </div>
            </span>
            <span class="content">Этап 1: оценка стоимости и доступности</span>
        </li>

        {{-- <li class="Grey">Менеджер</li> --}}
        {{-- <li class="Grey">Имидж & Платформа</li> --}}
    </ul>

    <div class="paragraphX2"></div>
</div>


@endcomponent