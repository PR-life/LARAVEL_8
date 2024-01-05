@extends('zJJ.PAGE.text._shema.index')


@section('content')
    <div class="I aura [ margin top bottom ]">

        @component('_wrap.Text.Citation', ['id' => 'Citation'])

            @slot('css', 'face face-top face-padding')
            @slot('author', 'ООО Альфа-Мед')
            @slot('author_description', 'представитель компании в России и регионах по оборудованию')

            <div class="content / Void">
                <p>Спасибо за отзыв и предложения по совершенствованию модели 551. Чтобы прибор не показывал "всё подряд" надо переключить ранжирование в другой режим. Мощность прибора - возможно Вы имели ввиду работу нагрузочного  генератора? В данной модели применяется генератор "плавающего" типа и его работа полностью автоматизирована. Самим не надо менять ни частоту ни мощность.</p>
            </div>
        @endcomponent
 
        <div>
            <div class="content-xs">face</div>
            <div class="paragraph-s"></div>
            @include('zJJ.DEV.tool.face',['id_package' => 'Citation', 'Var' => ['face','face-top','face-padding']])
        </div>

    </div>
@endsection