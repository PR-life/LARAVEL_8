@component('UTIN._wrap.A4.start', ['css' => $css ?? null, 'loop' => '2'])
 
@slot('head')
@component('UTIN._wrap.Font')
    @slot('name','Детальное содержание <br class="none_PC">"Этап 1"')
    <div class="_p Grey">Планирование ресурсов для продвижения</div>
@endcomponent
@endslot

<div class="paragraphX2"></div>

<div class="text">
    <ol class="-chek -dot -M / x-table / JsScroll">
        <li><a href="#page_tools">Инструменты и методы</a></li>
        <li><a href="#page_TV">ТВ-каналы</a></li>
        <li><a href="#page_SMI">Медиа и СМИ</a></li>
        <li><a href="#page_Radio">Радио</a></li>
        <li><a href="#page_ContentMarket">Контент-маркетинг</a></li>
        <li><a href="#page_Blogger">Блоггеры и просветительская деятельность</a></li>
        <li><a href="#page_Conferences">Конференции</a></li>
        {{-- <li><a href="#page_tools">Образовательные мероприятия</a></li> --}}
    </ol>
</div>

@endcomponent