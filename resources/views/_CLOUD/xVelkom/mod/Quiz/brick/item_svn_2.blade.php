@component('mod.Quiz.wrap.item')
    @slot('cssVol','velkom')
    @slot('center',true)
    @slot('cssName','h2 -vw b500 center-text_mbl')
    @slot('name','Нужен ли монтаж оборудования?')


    <div class="menu -tile -M vol-vote / center-text_mbl / cloud space-s">
        <? $arr_1 = [
            'Да',
            'Нет',
        ]
        ?>
        @include('zBrief._lego.vote.brick.menu_radio',['bd_name' => 'question_2','id_name' => 'vote_2_param_q2','cssName'=> 'h'])
    </div>

@endcomponent
