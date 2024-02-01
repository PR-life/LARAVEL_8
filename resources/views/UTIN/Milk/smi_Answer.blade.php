@component('_wrap.FIX.milk.win',['css' => '','cssFix' => 'cI_PC55 space-s', 'css_fix' => 'Pente aura / fix-H_mbl'])
@slot('id', 'milk_smiAnswer')
@slot('cssAbsAll', 'White -bg / round / Jolt -t / hidden')
<div class="Abs -all / Scroll_mbl"> 
    <div class="_scr / flex dC">
        <div class="Scroll_PC">
            <div class="_scr">
                <div class="hill-s"></div>

                {{-- https://news.pressfeed.ru/kak-kompanii-ili-ekspertu-bystro-popast-v-smi-so-svoim-kommentariem/?ysclid=ls1norstrj735668423
                     --}}


                <div class="text Article aura /  Edge edgeSPC">

                    <h2>Ищем запросы от журналистов и редакторов</h2>
                    <p>Мы активно ищем запросы от журналистов и отвечаем на них, предоставляя экспертные комментарии и фактологическую информацию для статей и программ.</p>
                    <p class="b600">Как это работает?</p>
                    <p>Каждый день журналисты создают более 1500 запросов на фактуру и комментарии для своих материалов. Наша команда анализирует эти запросы и находит подходящие возможности для вашего участия. Вы получаете упоминания в прессе и телевидении, а ваше мнение становится частью актуальных обсуждений.</p>

                    <div class="paragraphX2"></div>   
                    <p class="p b600 center-text">Примеры запросов</p>


                </div>
            
                <div class="paragraph"></div>   

                <div class="Details -edge -M / space_PC">


                    @include('UTIN.Milk._lego.smi_Answer_first')
                    @include('UTIN.Milk._lego.smi_Answer_first_OLD')

                </div>
                 

                @include('UTIN.Milk.brick.closeBottom')

 
            </div>
        </div>
    </div>
</div>
@endcomponent
