@component('UTIN._wrap.A4', ['css' => $css ?? null])

@slot('head')
@component('UTIN._wrap.Font')
    @slot('css','-M')
    @slot('name','Содержание')
    <div class="_p Grey">Определить бюджет</div>
@endcomponent
@endslot

<div class="paragraphX2"></div>

<div class="text">
    <ul class="vol-dot -dot -M">
        <li>
            Этап 1: Подбор ресурсов
            <span class="paragraph"></span>
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
            Этап 1: оценка стоимости и доступности этих ресурсов
        </li>

        {{-- <li class="Grey">Менеджер</li> --}}
        {{-- <li class="Grey">Имидж & Платформа</li> --}}
    </ul>
</div>


@endcomponent