@component('UTIN._wrap.A4.start', ['css' => $css ?? null, 'loop' => '2'])
 
@slot('head')
@component('UTIN._wrap.Font')
    @slot('name','Детальное содержание <br class="none_PC">"Этап 1"')
    <div class="_p Grey">Планирование ресурсов для продвижения </div>
@endcomponent
@endslot

<div class="paragraphX2"></div>

<div class="text">
    <ol class="-chek -dot -M / x-table">
        <li>Инструменты и методы</li>
        <li>Медиа и СМИ</li>
        <li>Контент-маркетинг</li>
        <li>Блоггеры и просветительская деятельность</li>
        <li> Образовательные мероприятия</li>
    </ol>
</div>

@endcomponent