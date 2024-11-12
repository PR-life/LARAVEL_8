@component('_Wrap.FIX.milk.win')
    @slot('id', 'milk_quizSvn')
    @slot('_fix_css', 'Pente aura W-100')

    <div class="Top -h"></div>
    <div class="space">
        <div class="h2 -vw / b500">Сделать расчет стоимости системы</div>
    </div>

    <div class="relative quiz-win">
        <div class="Plot plot-h plot-quiz / none_mbl"></div>
        @include('_._brick.img.squere',['css09071611' => 'W-100 none_PC'])
        <div class="Abs -all / Bg -gif">
            @include('_CLOUD.xVelkom.mod.Quiz.svn',['id'=>'svn']) 
        </div>
    </div>
@endcomponent