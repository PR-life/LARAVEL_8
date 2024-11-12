@component('mod.Quiz.wrap.item')
    @slot('cssVol','velkom')
    @slot('center',true)
    @slot('cssName','h2 -vw b500 center-text_mbl')
    @slot('name','Для реализации проекта, чье оборудование вы хотите использовать?')
    
    <div class="menu -tile -M vol-vote / center-text_mbl / cloud space-s">
        <? $arr_1 = [
            'Наше',
            'Ваше',
        ]
        ?>
        @include('zBrief._lego.vote.brick.menu_radio',['bd_name' => 'question_3','id_name' => 'vote_3_param_q3','cssName'=> 'h'])
    </div>

@endcomponent