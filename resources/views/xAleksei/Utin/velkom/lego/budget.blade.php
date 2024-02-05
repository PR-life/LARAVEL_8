@component('_wrap.Utin.index', ['loop' => 'Budget'])
    {{-- @slot('cssPlot', '-h') --}}
    {{-- @slot('cssHead','space-m') --}}

    @slot('head')
    <div class="h b500"><span class="Grey">Бюджет:</span> на февраль</div>
    <div class="paragraph"></div>
    @endslot



    <div class="H-100 _off">

        <div class="center-text">
            <div class="h1"><span class="Sub"><span class="_sub -left / Grey">до</span></span> 50 000</div>
            <div class="paragraph"></div>
            <div class="content">прошлый месяц: 45 000</div>
        </div>
        <div class="hill"></div>

        <div class="Grid x3 -gap / bg-cell">


        @component('xAleksei.Utin.velkom.wrap.cell.index', ['loop' => 1])
            @slot('name','Яндекс Директ')


            <dl class="-dot">
                <dt class="Grey">Целевые РК</dt>
                <dd>25 000 - 35 000</dd>
            </dl>
            <div class="paragraph"></div>
            <ul class="ul -XS vol-check">
                <li>без изменений</li>
            </ul>

            <div class="hill"></div>
            <div class="content b600">прошлый месяц</div>
            <div class="paragraph"></div>
            <ul class="-S void-s ul vol-dot">
                <li><span class="Grey">было</span>
                    <ul class="-XS void-s ul">
                        <li>25 000 / 45 000 </li>
                    </ul>
                </li>
                <li><span class="Grey">потратили (без НДС)</span>
                    <ul class="-XS void-s ul">
                        <li>34 338</li>
                    </ul>
                </li>
            </ul>  
        @endcomponent



        @component('xAleksei.Utin.velkom.wrap.cell.index', ['loop' => 1])
            @slot('name','Яндекс Услуги')
            <dl class="-dot">
                <dt class="Grey">РК</dt>
                <dd>8 000 - 15 000</dd>
            </dl>
            <div class="paragraph"></div>
            <ul class="ul -XS vol-dot c-red">
                <li>бюджета увеличились</li>
            </ul>

            <div class="hill"></div>
            <div class="content b600">прошлый месяц</div>
            <div class="paragraph"></div>
            <ul class="-S void-s ul vol-dot">
                <li><span class="Grey">было</span>
                    <ul class="-XS void-s ul">
                        <li>25 000 / 45 000 </li>
                    </ul>
                </li>
                <li><span class="Grey">потратили (без НДС)</span>
                    <ul class="-XS void-s ul">
                        <li>34 338</li>
                    </ul>
                </li>
            </ul> 
        @endcomponent


        @component('xAleksei.Utin.velkom.wrap.cell.index', ['loop' => 1])
        @slot('name','Стек 3')
 
        @endcomponent



        
        </div>
    </div>


 
@endcomponent