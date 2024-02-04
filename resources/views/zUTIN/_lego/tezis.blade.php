@component('zUTIN._wrap.A4.index', ['css' => $css ?? null, 'loop' => 'Tezis'])
    @slot('cssPlot', '-h')
    @slot('cssHead','space-m')

    @slot('head')



    <div class="h b500">Медиа и СМИ</div>
    <div class="paragraph"></div>


    {{-- @component('zUTIN._wrap.Font')
        @slot('css','-S Grey')
        @slot('cssName','Grey')
        @slot('name','Медиа и СМИ')
    @endcomponent
     --}}
     @endslot



    {{-- @slot('head')
    <div class="hill-s"></div> --}}
    <div class="hill-s"></div>
    <div class="Article aura / center-text space">
        <div class="inline">
            <div class="Badge -S -solo -green">
                <span>Тезис</span>
            </div>
        </div>
        <div class="h2 -vw / c-h b600">Узкие специалисты всегда востребованы как спикеры, и не нужно за это платить</div>
    </div>

    <div class="hill"></div>
    <div class="hill"></div>
    {{-- @endslot --}}

 
{{-- 
    <div class="Golden H-100 cross-xs_PC / Void void">
        <div class="_l / Bone / space bg-white round-m">
            <div class="h">Конкуренция</div>

            <div class="content">Их мало</div>
            <div class="content">Их мало</div>
        </div>
        <div class="_r round-m space bg-blue">

        </div>
    </div> --}}

 
@endcomponent