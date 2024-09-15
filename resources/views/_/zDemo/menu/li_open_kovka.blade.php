@component('_wrap._menu.li_open')
@slot('name','Ковка')
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