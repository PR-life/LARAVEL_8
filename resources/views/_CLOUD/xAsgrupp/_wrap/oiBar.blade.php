<div class="Scroll">
    <div class="_scr">
        {!!$slot!!}
        <div class="Bee"></div>
        <div class="Bee"></div>
    </div>
</div>

<script>
    const menuCatalog = document.getElementById('menu_1509');
    const activeItem = menuCatalog.querySelector('li.active');

    if (activeItem) {
        // Перебираем всех родительских <li> до корня
        let parentLi = activeItem.closest('li');

        parentLi.closest('ul').classList.add('active');

        // console.log(parentLi)
        while (parentLi) {
            // Добавляем класс "open" родительскому <li>
            parentLi.classList.add('open');
            // Ищем следующий родительский <li>
            parentLi = parentLi.parentElement.closest('li');
        }
    }
</script>