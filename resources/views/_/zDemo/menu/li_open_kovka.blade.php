@component('_wrap._menu.li_open')
@slot('name','Ковка')
@slot('ico')
    @include('xAsgrupp.menu._brick.Ico_plus')
@endslot
<ul class="none">
    @component('_wrap._menu.li_open')
    @slot('name','Кованые элементы')
        <ul class="none">
            <li class=""><a href="#">Балясины, стойки ограждений</a></li>
            <li class=""><a href="#">Вензеля, кольца</a></li>
            <li class=""><a href="#">Виноград кованый</a></li>
            <li class=""><a href="#">Вставки в балясину</a></li>
            <li class=""><a href="#">Декоративные панели</a></li>
            {{-- https://www.studiakovki.ru/catalog/?yclid=15888482306456289279 --}}
        </ul>   
    @endcomponent
    @component('_wrap._menu.li_open')
    @slot('name','Примеры готовых изделий')
        <ul class="none">
            @component('_wrap._menu.li_open')
            @slot('name','Частное домовладение')
            <ul class="none">
                <li class=""><a href="#">Ворота и калитки</a></li>
                <li class=""><a href="#">Заборы и ограждения</a></li>
                <li class=""><a href="#">Козырьки и навесы</a></li>
                <li class=""><a href="#">Перила</a></li>
                <li class=""><a href="#">Решетки</a></li>
            </ul>
            @endcomponent
            @component('_wrap._menu.li_open')
            @slot('name','Городское пространство')
            <ul class="none">
                <li><a href="#">МАФ</a></li>
                <li><a href="#">Освещение парков</a></li>
                <li><a href="#">Приствольные решетки</a></li>
                <li><a href="#">Скамейки</a></li>
                <li><a href="#">Урны</a></li>
            </ul>
            @endcomponent
        </ul>   
    @endcomponent
</ul>
@endcomponent