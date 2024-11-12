@component('mod.Quiz.wrap.item')
    @slot('cssVol','velkom')
    @slot('center',true)
    @slot('name','Места установки')

    
    <div class="menu -tile -M vol-vote x-veil / cloud space-s / Roll_mbl -crossS -edge">
        <? $arr_1 = [
            'Для дома',
            'В лифте',
            'Во дворе дома',
            'Обзорные камеры',
            'В подъезде',
            'Въезд на территорию',
            'Другое',
        ]
        ?>
        @include('zBrief._lego.vote.brick.menu_checkbox',['bd_name' => 'question_1', 'id_name' => 'vote_1_param_q1'])
        <div class="gstrm"></div>
    </div>

@endcomponent

