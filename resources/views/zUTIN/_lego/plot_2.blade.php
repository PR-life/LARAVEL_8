@component('zUTIN._wrap.A4.start', ['css' => $css ?? null, 'loop' => '2'])
 
@slot('head')
@component('zUTIN._wrap.Font')
    @slot('name','Комментарии')
    <div class="_p Grey">по указанным площадкам</div>
@endcomponent
@endslot

<div class="paragraphX2"></div>

<div class="text">
    <ol class="-chek -dot -M / x-table / JsScroll">
        {{-- <li><a href="#page_tools">Инструменты и методы</a></li> --}}
        <li><a href="#page_TV">ТВ-каналы</a></li>
        <li><a href="#page_SMI">Медиа и СМИ</a></li>
        <li><a href="#page_Radio">Радио</a></li>
        <li><a href="#page_ContentMarket">Контент-маркетинг</a></li>
        <li><a href="#page_PS">Прочие</a></li>
        <li><a href="#page_Blogger">Просветительская деятельность</a></li>
        <li><a href="#page_Conferences">Образовательные и деловое мероприятия</a></li>
        {{-- <li><a href="#page_tools">Образовательные мероприятия</a></li> --}}
    </ol>
</div>

@endcomponent