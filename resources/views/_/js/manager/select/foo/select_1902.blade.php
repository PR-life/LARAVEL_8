function select_1902(Options, field, select, text = '<span class="space-s block net">выбрать...<span class="ghost">..</span></span>') {
    // Преобразуем Options в массив, если это не массив
    const optionsArray = Array.from(Options);

    // Получаем список активных элементов в поле
    const activeValues = Array.from(field.querySelectorAll('._item')).map(node => node.getAttribute('data-value'));

    // Обрабатываем каждый элемент Options
    optionsArray.forEach(option => {
        const value = option.value;

        if (select.hasAttribute('multiple')) {
            if (!activeValues.includes(value)) {
                const elem = createSelectableItem(option.text, value, () => {
                    option.selected = false;
                    elem.remove();
                    if (!select.selectedOptions.length) field.innerHTML = text;
                });
                field.append(elem);
            }
        } else {
            if (select.selectedIndex === 0) {
                field.innerHTML = text;
            } else {
                const elem = createSelectableItem(option.text, value, () => {
                    option.selected = false;
                    elem.remove();
                    select.selectedIndex = -1;
                    field.innerHTML = text;
                });
                field.innerHTML = '';
                field.append(elem);
            }
        }
    });

    // Функция создания элемента span для выбранного элемента
    function createSelectableItem(text, value, onClickHandler) {
        const elem = document.createElement('span');
        elem.className = '_item block content-xs space-s round-s yesEvents';
        elem.textContent = text;
        elem.dataset.value = value;
        elem.onclick = onClickHandler;
        return elem;
    }
}
