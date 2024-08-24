function selectToUl(parent) {
    // Скрываем оригинальный select
    const selectElement = parent.querySelector('select');
    selectElement.classList.add('none');

    // Создаем обертки и элементы для кастомного dropdown
    const wrap = document.createElement('div');
    const dropdown = document.createElement('div');
    const ul_wrap = document.createElement('div');
    const ul = document.createElement('ul');
    const withSearch = parent.classList.contains('vol-withSearch');
    const withManager = parent.classList.contains('vol-withManager');

    // Классы для стилизации
    wrap.classList.add('wrap_dropdown', 'relative', '-White', 'White', '-bg');
    dropdown.classList.add('_dropdown');
    ul_wrap.id = 'wrap_select_items_filter';
    ul.classList.add('_ul');

    // Добавляем поле поиска, если это необходимо
    if (withSearch) {
        // if (withManager) {
        //     dropdown.innerHTML = `
        //     <div class="_manager space-s / Goo -t / bg-manager">
        //         <div class="x-manager">
        //             <ul class="menu -tag -S / lie">
        //                 <li data-click data-node='wrap_select_items' data-css data-toggle='category-bazy'><span class="a noEvents">Базы</span></li>
        //                 <li data-click data-node='wrap_select_items' data-css data-toggle='tag-zags'><span class="a noEvents">загс</span></li>
        //             </ul>
        //         </div>
        //         <input class="_search" type="text" placeholder="поиск...">
        //     </div>
        //     `;
        // } else {
            dropdown.innerHTML = `
            <div class="_manager space-s / Goo -t / bg-manager">
                <input class="_search" type="text" placeholder="поиск...">
            </div>
            `;
        // }
 


        // Находим input для фильтрации
        const searchInput = dropdown.querySelector('input._search');


        // Фильтрация элементов списка по введенному тексту
        searchInput.addEventListener('keyup', function() {
            const inputVal = this.value.toLowerCase();
            ul.querySelectorAll('li').forEach(item => {
                const matches = item.textContent.toLowerCase().includes(inputVal);
                item.classList.toggle('none', !matches);
            });
        });
    }

    // Создаем элементы списка из option
    Array.from(selectElement.options).forEach((option, index) => {
        const li = document.createElement('li');
        li.classList.add('_item');
        li.classList.add(option.getAttribute('data-css') || 'default-class');
        li.dataset.value = option.value;
        li.dataset.loop = index;
        li.textContent = option.textContent;

        if (option.selected) {
            li.classList.add('selected');
        }

        ul.appendChild(li);
    });
    
    // Добавляем dropdown в обертку и в родительский элемент
    dropdown.appendChild(ul_wrap).appendChild(ul);
    wrap.appendChild(dropdown);
    parent.appendChild(wrap);

    // Обработка кликов на элементы списка
    ul.addEventListener('click', event => {
        const li = event.target.closest('li');
        if (!li) return;
        const select = ul.closest('.Select').querySelector('select');
        const field = ul.closest('.Select').querySelector('._field');

        if (select.multiple) {
            li.classList.toggle('selected');
            select.options[li.dataset.loop].selected = li.classList.contains('selected');
        } else {
            select.selectedIndex = li.dataset.loop;
            parent.querySelector('.js-close').click();
        }

        select_1902(select.selectedOptions, field, select);
    });

    // Наблюдатель за изменениями в элементе select
    const observerSelect = new MutationObserver(mutationRecords => {
        mutationRecords.forEach(record => {
            if (record.removedNodes.length) {
                const removedNode = record.removedNodes[0];
                if (removedNode.nodeType === Node.ELEMENT_NODE) {
                    const value = removedNode.getAttribute('data-value');
                    ul.querySelector(`[data-value='${value}']`).classList.remove('selected');
                }
            }
        });
    });

    observerSelect.observe(parent.querySelector('._field'), {
        childList: true,
        subtree: true,
    });
}
