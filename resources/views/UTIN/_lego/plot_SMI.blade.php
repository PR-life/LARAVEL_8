@component('UTIN._wrap.A4.index', ['css' => $css ?? null, 'loop' => 'SMI'])
 
@slot('head')
@component('UTIN._wrap.Font')
    @slot('name','СМИ')
    {{-- <div class="_p Grey">Создание экспертного контента на сторонних площадках.</div> --}}
@endcomponent
@endslot

 


 <div class="Golden cross-xs_PC / void-s void-mbl">
    <div class="_l Plot -hMin -S / Bone / space bg-white round-m">

        <div>
            <div class="paragraph-s"></div>
            <div class="h">Ресурсы</div>
        </div>
        
 
        <div class="_body / Details -edge">
            {{-- <div class="content-s b600">Публикации</div> --}}
            <div class="paragraph"></div>
            {{-- <details>
                <summary class="-S">Газеты <i></i></summary>
            </details> --}}
            <details>
                <summary class="-S">Интернет-ресурсы<i></i></summary>
                <p>Лайт - https://deadline.media/feed/?query=12959</p>
                <p>https://lifehacker.ru/kak-zamedlit-serdcebienie/</p>

                ultra Lite
                <p>https://zhizn-zvezd.ru/mariya-chajkovskaya-biografiya-doktora-kardiologa/</p>
            </details>
            <details>
                <summary class="-S">Интернет-издание<i></i></summary>
                 <p></p>
            </details>
            <details>
                <summary class="-S">Журналы<i></i></summary>

                <p>notLait - https://www.rmj.ru/articles/kardiologiya/</p>

    

            </details>
            <div class="paragraphX2"></div>

            
        </div>
        

    </div>
    <div class="_r round-m space bg-blue">

        {{-- <div> --}}
            <div class="paragraph-s"></div>
            <div class="h">Приоритет</div>
            <div class="paragraph"></div>

            <div class="Info -ico ico-left">
                <div class="content">Устанавливание и поддержание контактов с журналистами и редакторами для обеспечения видимости медицинских инициатив и экспертного мнения.</div>
            </div>
            <div class="paragraphX2"></div>


            <h2>Инструменты</h2>

            @include('UTIN._brick.interview')

            <div class="content">праздник</div>
            <div class="content">платные публикации</div>

            <ul>
                <li>попасть в авторский пул «РБК Pro»</li>
            </ul>
            <div class="paragraph"></div>
            <div class="content">Редакторы сами связываются с представителями компаний-лидеров рынка, а также с известными экспертами в своих отраслях и просят их присылать колонки.</div>

    </div>
 </div>

@endcomponent