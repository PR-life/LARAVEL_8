@component('mod.Quiz.wrap.item')
    @slot('cssVol','velkom')
    @slot('center',true)
    @slot('cssName','h b600 center-text')
    {{-- @slot('name','Бесплатная консультация') --}}

    @slot('description')
    <div class="Max -w7 aura / center-text">
        <div class="content-m space-s / Family-OpenSans">
            <span class="b600 c-h">Бесплатная консультация.</span>
            Вместе с ней мы отправим: Примеры работ, Персональную скидку, Расчет стоимости проекта
        </div>
    </div>
    @endslot
    <div class="Form / Blog aura space-s / edge">
        @include('component.Form._inc.name',[
            'label' => 'Введите имя<b></b>',
            'css' => 'label-insideInput / Anime vol-shake_hor shadow',
            'cssInput' => 'round-s'
            ])
        <div class="paragraph"></div>
        @include('component.Form._inc.phone',[
            'label' => '*Телефон...',
            'css' => 'label-insideInput / Anime vol-shake_hor shadow',
            'cssInput' => 'round-s',
            'errorBag' => 'newQuiz',
            'required' => true
        ])
        <div class="paragraph"></div>
        @include('component.Form._inc.area',[
            'label' => 'адрес объекта...',
            'css' => 'label-insideInput / Anime vol-shake_hor shadow',
            'cssInput' => 'round-s',
            'errorBag' => 'newQuiz',
        ])
    </div>
    <div class="paragraph"></div>
    <div class="flex cC">
        <button class="-Btn Btn cC vol-yellow / round-s">
            <span class="_x / content-s">Оставить заявку</span>
            <span class="none">Ошибка! Проверьте данные</span>
        </button>
    </div>
@endcomponent