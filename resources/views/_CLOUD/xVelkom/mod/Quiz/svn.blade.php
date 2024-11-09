<?
$arr_navQuiz_001 = [
    '1. Места установки',
    '2. Монтаж',
    '3. Оборудование',
    '4. Обратная связь',
    // '5555',
]
?>

@component('mod.Slider.vol.quiz',['arr_navStories_001'=>$arr_navQuiz_001, 'id'=>'Quiz_'.$id])

@slot('manager')
    @include('mod.Slider._lego.nav.quiz', ['arrTile' => $arr_navQuiz_001])
@endslot

@include('_CLOUD.xVelkom.mod.Quiz.brick.item_svn_1')
@include('_CLOUD.xVelkom.mod.Quiz.brick.item_svn_2')
@include('_CLOUD.xVelkom.mod.Quiz.brick.item_svn_3')
@include('_CLOUD.xVelkom.mod.Quiz.brick.item_svn_data')
 
@endcomponent
