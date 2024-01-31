@component('UTIN._wrap.A4.index', ['css' => $css ?? null, 'loop' => 'Radio'])
 
@slot('cssHead','space-m')
@slot('head')
@component('UTIN._wrap.Font')
    @slot('name','Эфир на радио')
    {{-- <div class="_p Grey">Участие в эфире радио в качестве эксперта или гостя</div> --}}
@endcomponent
@endslot

 


 <div class="Golden cross-xs_PC / void-s void-mbl space-s">
    <div class="_l Plot -h -S / Bone / space bg-white round-m">

        <div>
            <div class="paragraph-s"></div>
            <div class="content b600">Участие в эфире в качестве эксперта или гостя</div>
        </div>
        
 
        <div class="_body / Details -edge">

            <div class="paragraph [ padding top ]"></div>

            <details>
                <summary class="-S">В качестве гостя на эфире<i></i></summary>
                <div class="_edge55 void">
 

                    
                    <div class="Citation -mblPC -mbl -M -left">
                        <div class="_right">
                        <div class="content round-s">Для приглашения в качестве гостя на радио особенно подходят профессиональные праздники. К примеру, 29 сентября отмечается Всемирный день сердца. В окно с 23 по 29 сентября 2024 г. есть возможность подготовиться и получить хороший эфир, возможно не один.</div>
                        <div class="author">— Life, связи с общественностью</div>
                        </div>
                    </div>
     
    
                </div>
            </details>


            

            {{-- https://smotrim.ru/video/1945630 --}}
        </div>
        

    </div>
    <div class="_r round-m space bg-blueFon">

 
 
            <div class="paragraph"></div>
            <div class="h2 familyDinPro b600">Услуги агентства</div>
            <div class="paragraph"></div>

            <div class="void">
                <ul class="-service ul -S">
                    <li>поиск возможностей для интервью (<span class="a" data-click data-goto='milk_smiInterview' data-foo='click'>подробнее</span>)</li>
                </ul>



            


        </div>
    </div>
 </div>

@endcomponent