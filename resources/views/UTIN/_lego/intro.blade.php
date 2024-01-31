@component('UTIN._wrap.A4.main', ['css' => $css ?? null, 'loop' => '0'])

    @slot('cell_1')
        <div class="content">Стек 1</div>

        <ul class="-S void-s ul vol-dot">
            <li>лечением аритмий с помощью РЧА</li>
        </ul>

        {{-- <ul>
            <li>пациенты, возвращаются к нормальной жизни</li>
            <li>когда есть угроза жизни и здоровью</li>
        </ul> --}}
    @endslot


    @slot('cell_2')
        <div class="content">Стек 2</div>

        <ul class="-S void-s ul vol-check">
            <li>Стажировки в европейских клиниках</li>
            <li>В 2022 году стал лучшим кардиохирургом по версии ПроДокторов</li>
            <li>Научные исследования о сердечных аритмиях на американской конференции 2020 года были включены в ТОП 10 докладов</li>
        </ul>
    @endslot

    @slot('cell_3')
        <div class="content">Стек 3</div>

        <ul class="-S void-s ul vol-dot">
            <li>Что важно знать о малоинвазивном лечении аритмии</li>
            <li>рассказываю об уникальных операциях</li>
        </ul>
    @endslot

    <div class="h2 -vw Article / c-h center-text">Планирование ресурсов для повышение видимости и авторитетности по вопросам здоровья <br class="none_beyond">и медицины</div>
    <div class="content"></div>

    <div class="paragraphX2"></div>
    <div class="Info / -ico ico-center vol-2 / center-text">
        <div class="content-s">Для ответа использовали материалы в соц. сетях
        <br>и подкаст <a href="https://www.youtube.com/watch?v=hwXkoQvRoHE&t=244s" target="_blank">сердечный подкаст | диалог с кардиохирургом-аритмологом</a></div>
    </div>
    <div class="paragraphX2 none_mbl"></div>


@endcomponent



 





