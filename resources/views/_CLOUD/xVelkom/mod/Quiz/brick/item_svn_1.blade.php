@component('mod.Quiz.wrap.item')
    @slot('cssVol','velkom')
    @slot('center',true)

    
    <div class="space_PC"> 
        <div class="h / b600 / edge-left">Места установки</div>
        <div class="paragraphX2"></div>
    
    
        <div class="menu -tile -M vol-vote x-veil / cloud space-s / Roll_mbl -crossS -edge">
            <? $arr_1 = [
                'Для дома',
                'В лифте',
                'Во дворе дома',
                'Обзорные камеры',
                'В подъезде',
                'Въезд на территорию',
                // 'Другое',
            ]
            ?>
            @include('zBrief._lego.vote.brick.menu_checkbox',['bd_name' => 'question_1', 'id_name' => 'vote_1_param_q1'])
        
            <div class="_wrap vote_1_param_q16 -Black / round-s relative index">
                <input id="vote_1_param_q16" class="none" type="checkbox" name="question_1" value="6" wfd-invisible="true">
                <label for="vote_1_param_q16" class="Bone content-xs / space-s round-s relative">
                    <span class="content-xxs"></span>
                    <span class="content-s pl-1 pr-1 / familyInter">Другое</span>
                </label>
                    <div class="Veil _indexMin">
                    <div class="_bottom round-s"></div>
                </div>	
            </div>
            <div class="gstrm"></div>
    
        </div>

    </div>

@endcomponent
