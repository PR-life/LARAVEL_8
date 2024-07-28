function add_manager(wrap_id) {
 
    // Находим контейнер по ID
    const x = document.getElementById(wrap_id);
    const wrapSelectTag = document.getElementById('wrap_select_tag');

    // console.log(wrapSelectTag)

    // Проверяем, что элемент найден
    if (wrapSelectTag) {
        // Находим элемент select внутри контейнера
        const selectElement = wrapSelectTag.querySelector('select');

        if (selectElement) {
            // Получаем выбранное значение
            const selectedOption = selectElement.options[selectElement.selectedIndex];

            // Извлекаем текст и значение выбранного элемента
            const selectedText = selectedOption.textContent.trim();
            const selectedSlug = selectedOption.getAttribute('data-slug');

            console.log(`Selected Text: ${selectedText}`);
            console.log(`Selected Value: ${selectedSlug}`);
        } else {
            console.error('Select element not found');
        }
    } else {
        console.error('Container with ID "wrap_select_tag" not found');
    }
}
