<div class="manager-11121408 / flex cross-xs space round-s">
    <div id="addBtn" class="btn-add x-close / pointer" data-click data-node='wrap_11121143' data-css data-add='S' data-loop>
        <svg viewBox="0 0 36 36">
            <path d="m 26,13 0,10 -16,0 0,-10 z m -14,2 12,0 0,6 -12,0 0,-6 z" fill="currentColor" fill-rule="evenodd"></path>
        </svg>
    </div>
    <div id="removeBtn" class="btn-remove x-close / pointer" data-click data-node="wrap_11121143" data-css data-remove='S' data-loop>
        <svg viewBox="8 8 20 20">
            <path d="m 26,13 0,10 -16,0 0,-10 z m -14,2 12,0 0,6 -12,0 0,-6 z" fill="currentColor" fill-rule="evenodd"></path>
        </svg> 
    </div>
    <div class="btn-full / pointer" data-click data-node="body" data-css data-toggle='schema-Photo'>
        <svg class="x-close" viewBox="0 0 24 24" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M13 4C13 3.44772 13.4477 3 14 3H20C20.5523 3 21 3.44772 21 4V10C21 10.5523 20.5523 11 20 11C19.4477 11 19 10.5523 19 10V6.41421L15.2071 10.2071C14.8166 10.5976 14.1834 10.5976 13.7929 10.2071C13.4024 9.81658 13.4024 9.18342 13.7929 8.79289L17.5858 5H14C13.4477 5 13 4.55228 13 4ZM4 13C4.55228 13 5 13.4477 5 14V17.5858L8.79289 13.7929C9.18342 13.4024 9.81658 13.4024 10.2071 13.7929C10.5976 14.1834 10.5976 14.8166 10.2071 15.2071L6.41421 19H10C10.5523 19 11 19.4477 11 20C11 20.5523 10.5523 21 10 21H4C3.44772 21 3 20.5523 3 20V14C3 13.4477 3.44772 13 4 13Z" fill="currentColor"></path></svg>
        <div class="none x-open">
            @svg('close')
        </div>
    </div>
    {{-- <svg class="none x-open" aria-label="Кнопка действия с приближением изображения" class="Uvi gUZ U9O kVc" height="16" role="img" viewBox="0 0 24 24" width="16"><path d="M9.75 1a1.25 1.25 0 0 1 0 2.5H5.27l5.36 5.37a1.25 1.25 0 0 1-1.76 1.76L3.5 5.27v4.48a1.25 1.25 0 0 1-2.5 0V1zM20.5 14.25a1.25 1.25 0 0 1 2.5 0V23h-8.75a1.25 1.25 0 0 1 0-2.5h4.48l-5.36-5.37a1.25 1.25 0 0 1 1.76-1.76l5.37 5.36z"></path></svg> --}}
</div>

<style>
    .manager-11121408 .active {
        opacity: .5;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const storageKey = 'wrap_11121143'; // Имя хранилища
        const addButton = document.getElementById('addBtn');
        const removeButton = document.getElementById('removeBtn');

        // Проверка состояния хранилища при загрузке страницы
        function updateButtonState() {
            const currentData = JSON.parse(localStorage.getItem(storageKey)) || [];
            if (currentData.length > 0) {
                addButton.classList.add('active');
                removeButton.classList.remove('active');
            } else {
                addButton.classList.remove('active');
                removeButton.classList.add('active');
            }
        }

        // Добавление элемента в хранилище
        addButton.addEventListener('click', () => {
            const value = 'S';

            let currentData = JSON.parse(localStorage.getItem(storageKey)) || [];
            if (!currentData.includes(value)) {
                currentData.push(value);
                localStorage.setItem(storageKey, JSON.stringify(currentData));
            }

            updateButtonState();
            console.log(`Добавлено: ${value}. Текущее содержимое:`, currentData);
        });

        // Удаление элемента из хранилища
        removeButton.addEventListener('click', () => {
            const value = 'S';

            let currentData = JSON.parse(localStorage.getItem(storageKey)) || [];
            currentData = currentData.filter(item => item !== value);
            localStorage.setItem(storageKey, JSON.stringify(currentData));

            updateButtonState();
            console.log(`Удалено: ${value}. Текущее содержимое:`, currentData);
        });

        // Инициализация статуса кнопок при загрузке
        updateButtonState();
    });
</script>


{{-- 
<div class="space-s flex / cross-20101136 / yesEvents">
    <div class="-Btn space-s round-xs pointer / slim / D-Seo -off" 
    >
<span class="content-xxs / noEvents">seo</span>
</div>
<div class="-Btn space-s round-xs pointer / slim / none D-Seo -on" data-click="" data-node="wrap" data-css="" data-remove="vol-seo" data-loop="" data-localstorage="" localstorage-name="wrap">
<span class="content-xxs / noEvents">seo</span>
</div>    <div class="-Btn space-s round-xs pointer / slim / D-Media -off" data-click="" data-node="wrap" data-css="" data-add="vol-media" data-loop="" data-localstorage="" localstorage-name="wrap">
<span class="content-xxs / noEvents">media</span>
</div>
<div class="-Btn space-s round-xs pointer / slim / none D-Media -on" data-click="" data-node="wrap" data-css="" data-remove="vol-media" data-loop="" data-localstorage="" localstorage-name="wrap">
<span class="content-xxs / noEvents">media</span>
</div>    <div class="-Btn space-s round-xs pointer / slim / D-Relation -off" data-click="" data-node="wrap" data-css="" data-add="vol-relation" data-loop="" data-localstorage="" localstorage-name="wrap">
<span class="content-xxs / noEvents">relation</span>
</div>
<div class="-Btn space-s round-xs pointer / slim / none D-Relation -on" data-click="" data-node="wrap" data-css="" data-remove="vol-relation" data-loop="" data-localstorage="" localstorage-name="wrap">
<span class="content-xxs / noEvents">relation</span>
</div>    <div class="-Btn space-s round-xs pointer / slim / D-Status -off" data-click="" data-node="wrap" data-css="" data-add="vol-status" data-loop="" data-localstorage="" localstorage-name="wrap">
<span class="content-xxs / noEvents">status</span>
</div>
<div class="-Btn space-s round-xs pointer / slim / none D-Status -on" data-click="" data-node="wrap" data-css="" data-remove="vol-status" data-loop="" data-localstorage="" localstorage-name="wrap">
<span class="content-xxs / noEvents">status</span>
</div>    
<div class="-Btn space-s round-xs pointer / slim / D-Db -off" data-click="" data-node="wrap" data-css="" data-add="vol-db" data-loop="" data-localstorage="" localstorage-name="wrap">
<span class="content-xxs / noEvents">DB</span>
</div>
<div class="-Btn space-s round-xs pointer / slim / none D-Db -on" data-click="" data-node="wrap" data-css="" data-remove="vol-db" data-loop="" data-localstorage="" localstorage-name="wrap">
<span class="content-xxs / noEvents">DB</span>
</div>
</div> --}}


 