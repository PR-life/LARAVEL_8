@component('_wrap._menu.li_open')
@slot('name','Технические газы и оборудовавние')
<ul class="none">
    @component('_wrap._menu.li_open')
    @slot('name','Технические газы')
    <ul class="none">
        <li class="{{request()->is('*/yglekislota*') ? 'active' : ''}}"><a href="#">Углекислота</a></li>
        <li class=""><a href="#">Сварочная смесь</a></li>
        <li class=""><a href="#">Кислород</a></li>
        <li class=""><a href="#">Аргон</a></li>
        <li class=""><a href="#">Пропан</a></li>
        <li class=""><a href="#">Азот</a></li>
        <li class=""><a href="#">Гелий</a></li>
        <li class=""><a href="#">Ацетилен</a></li>
        <li class=""><a href="#">Сжатый воздух</a></li>
    </ul>
    @endcomponent
    @component('_wrap._menu.li_open')
    @slot('name','Пищевые газы')
    <ul class="none">
        <li class=""><a href="#">Углекислота пищевая</a></li>
        <li class=""><a href="#">Пивной газ</a></li>
    </ul>
    @endcomponent
</ul>   
@endcomponent