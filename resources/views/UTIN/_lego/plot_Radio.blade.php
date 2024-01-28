@component('UTIN._wrap.A4.index', ['css' => $css ?? null, 'loop' => 'Radio'])
 
@slot('cssHead','space-m')
@slot('head')
@component('UTIN._wrap.Font')
    @slot('name','Эфир на радио')
    <div class="_p Grey">Участие в эфире радио в качестве эксперта</div>
@endcomponent
@endslot

 


 <div class="Golden cross-xs_PC / void-s void-mbl space-s">
    <div class="_l Plot -h -S / Bone / space bg-white round-m">

        <div>
            <div class="paragraph-s"></div>
            <div class="content b600">В качестве эксперта</div>
        </div>
        
 
        <div class="_body">
            <div class="h b600 [ padding top ]">В качестве гостя на эфире</div>
            <div class="paragraph"></div>


            <div class="Citation -mblPC -mbl -M -left">
                <div class="_right">
                <div class="content round-s">Для приглашения в качестве гостя на радио особенно подходят профессиональные праздники. Например, 29 сентября отмечается Всемирный день сердца. В окно с 23 по 29 сентября 2024 г. есть возможность подготовиться и получить хороший эфир, и не один.</div>
                <div class="author">— Life, связи с общественностью</div>
                </div>
            </div>

            <div class="hill"></div>
            

            {{-- https://smotrim.ru/video/1945630 --}}
        </div>
        

    </div>
    <div class="_r round-m space bg-blueFon">

        <div class="void">

            <div class="paragraph-s"></div>
            <div class="h">Услуги агентства</div>
            {{-- <div class="paragraph"></div> --}}
            <div class="Info -ico ico-left vol-2">
                <div class="content">Если вашей целью является появление в эфире на федеральных каналах или радио, мы рекомендуем воздержаться от поиска путей через платные услуги. Наше агентство предлагает сосредоточиться на создании экспертных публикаций в СМИ, что станет более эффективным способом достижения вашей цели.</div>
            </div>
            <ul class="ul vol-dot void">
                <li>поиск возможностей для интервью</li>
            </ul>



            


        </div>
    </div>
 </div>

@endcomponent