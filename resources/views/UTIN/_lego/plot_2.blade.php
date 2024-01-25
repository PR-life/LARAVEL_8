@component('UTIN._wrap.A4', ['css' => $css ?? null])
 
@slot('head')
@component('UTIN._wrap.Font')
    @slot('name','Детальное содержание "Этап 1"')
    <div class="_p Grey">Планирование ресурсов для продвижения </div>
@endcomponent
@endslot

<div class="paragraphX2"></div>

<div class="text">
    <ol class="-chek -dot -M">
        <li>Инструменты</li>
        <li>СМИ
            {{-- <ul class="-S -Grey Family-OpenSans">
                <li>Лайт</li>
                <li>not Лайт</li>
            </ul> --}}
        </li>
        <li>Контент: С чем можно работать
            {{-- <ul class="-S -Grey Family-OpenSans">
                <li>LSI-копирайтинг</li>
                <li>Иsстории</li>
            </ul> --}}
        </li>
        <li>Интервью</li>
    </ol>
</div>

@endcomponent