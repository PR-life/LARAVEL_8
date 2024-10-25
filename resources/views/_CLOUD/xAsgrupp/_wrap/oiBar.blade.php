<div class="Scroll">


    <div class="Abs -right / pointer" data-click data-css data-node='body' data-localstorage localstorage-name='body' data-toggle="schema-aside">
        <svg class="ico24101019 noEvents" viewBox="0 0 42 142" fill="none">
            <g clip-path="url(#clip24101019)">
                <g filter="url(#filter24101019)">
                    <path fill="#fff" d="M0 106V12C0 36.2173 18 38 18 59.0624C18 80.1248 0 83.2963 0 106Z"></path>
                    <path fill="#000" fill-rule="evenodd" clip-rule="evenodd" d="M7 54C7 54.8284 6.3284 55.5 5.5 55.5C4.6716 55.5 4 54.8284 4 54C4 53.1716 4.6716 52.5 5.5 52.5C6.3284 52.5 7 53.1716 7 54ZM5.5 60.5C6.3284 60.5 7 59.8284 7 59C7 58.1716 6.3284 57.5 5.5 57.5C4.6716 57.5 4 58.1716 4 59C4 59.8284 4.6716 60.5 5.5 60.5ZM10.5 60.5C11.3284 60.5 12 59.8284 12 59C12 58.1716 11.3284 57.5 10.5 57.5C9.6716 57.5 9 58.1716 9 59C9 59.8284 9.6716 60.5 10.5 60.5ZM10.5 55.5C11.3284 55.5 12 54.8284 12 54C12 53.1716 11.3284 52.5 10.5 52.5C9.6716 52.5 9 53.1716 9 54C9 54.8284 9.6716 55.5 10.5 55.5ZM7 64C7 64.8284 6.3284 65.5 5.5 65.5C4.6716 65.5 4 64.8284 4 64C4 63.1716 4.6716 62.5 5.5 62.5C6.3284 62.5 7 63.1716 7 64ZM10.5 65.5C11.3284 65.5 12 64.8284 12 64C12 63.1716 11.3284 62.5 10.5 62.5C9.6716 62.5 9 63.1716 9 64C9 64.8284 9.6716 65.5 10.5 65.5Z"></path>
                </g>
            </g>
            
            <defs>
                <filter id="filter24101019" x="-24" y="0" width="66" height="142" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                    <feOffset dy="12"></feOffset>
                    <feGaussianBlur stdDeviation="12"></feGaussianBlur>
                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                    <feColorMatrix type="matrix" values="0 0 0 0 0.131494 0 0 0 0 0.131494 0 0 0 0 0.131494 0 0 0 0.3 0"></feColorMatrix>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1097_5574"></feBlend>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1097_5574" result="shape"></feBlend>
                </filter>
                <clipPath id="clip24101019"><rect width="42" height="142"></rect></clipPath>
            </defs>
        </svg>
    </div>

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