@component('mod.Quiz.wrap.item')
    @slot('cssVol','velkom')
    @slot('center',true)

    <div class="none_mbl">
        <div class="paragraph"></div>
        <img class="Pente-1 aura / Logo" src="/images/logo/logo-white_460.png" alt="">
        <div class="paragraphX2"></div>
    </div>

    
    <div class="space"> 
        <div class="h / b600 / edge-left">Для реализации проекта, чье оборудование вы хотите использовать?</div>
        <div class="paragraphX2"></div>
    
        <div class="menu -tile -M vol-vote / cloud space-s">
            <? $arr_1 = [
                'Наше',
                'Ваше',
            ]
            ?>
            <input name="v1_name" value="На каких уровнях необходимо повысить узнаваемость" type="hidden">
            @include('zBrief._lego.vote.brick.menu_radio',['bd_name' => 'question_3','id_name' => 'vote_3_param_q3'])
        </div>
        
    </div>

@endcomponent