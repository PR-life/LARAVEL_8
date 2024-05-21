<div class="Bee"></div>
<div class="paragraphX2"></div>
<div class="Wings">
    <div class="_win -t / x-space-left">
        <div class="inline">
            <a href="{{route('admin.crm.face.edit', $face->id)}}" class="content / flex cI"><span class="Ico -long / mr-2">@svg('arrow-3_Zleft')</span><span>назад</span></a>
        </div>
        <div class="paragraph"></div>
        <div class="h2 b600 c-h">ПРОФИЛЬ</div>
    </div>
</div>
<div class="paragraph"></div>

@component('_Wrap.Plura.menu')
    @slot('menu_1', 'Личные данные')
    @slot('menu_2', 'Контакты')
    
    @if($face->gender == 'male')
        @slot('menu_3', 'размеры: Пиджак')
        @slot('menu_4', 'размеры: Брюки')
        @slot('menu_5', 'размеры: Сорочка')
        @slot('menu_6', 'размеры: Трикотаж')
        @slot('menu_7', 'размеры: Джинсы')
        @slot('menu_8', 'размеры: Обувь')
    @elseif($face->gender == 'female')
        @slot('menu_3', 'размеры: Вверх')
        @slot('menu_4', 'размеры: Низ')
        @slot('menu_5', 'размеры: Обувь')
    @else
        {{-- @slot('menu_end', 'укажите ПОЛ Профилля для редактирования Размеров') --}}
        <div class="Info -ico ico-center / -space">
            <div class="content / center-text">для редактирования Размеров <br>укажите "Пол" профиля </div>
        </div>
    @endif
@endcomponent