<div id="wrap_Relationships" class="Fog / Gardener / OnOff / bg-relationships / relative index" 
data-click data-css data-toggle='On' 
data-localstorage localstorage-id
>

@include('zADMIN/_brick/manager/close/abs_lvl_2')

<div class="Abs -all / _indexMax / x-21020758 / pointer"></div>

<div class="Field -b -h / Max_H_19101420" data-stopClick>

    <div class="flex cross / space">
        <div class="Min -w5">
            @include('zADMIN/PAGE/_wrap/select/name',['Var' => 'Категория'])
            @component('zADMIN.PAGE._wrap.select.categories.main', ['id' => 'categories'])
                @include('_._brick.select.categories.edit.main',['Categories' => $categories, 'Var' => $paper])
            @endcomponent
        </div>
        <div class="Min -w5">
            @include('zADMIN/PAGE/_wrap/select/name',['Var' => 'Теги'])
            @component('zADMIN.PAGE._wrap.select.tags.all')
                @include('_._brick.select.tags.edit.index',['Tags' => $tags,'Var' => $paper])
            @endcomponent
        </div>
    </div>

    <div class="space-s">
        @include('zADMIN/PAGE/_wrap/select/name',['Var' => 'Услуги'])
        @component('zADMIN.PAGE._wrap.select.items.index', ['id' => 'items'])
            @include('_._brick.select.items.edit.index',['Items' => $items, 'Var' => $paper])
        @endcomponent
    </div>



    <div class="paragraph / _off"></div>
</div>

{{-- <div class="Max -w5">
</div>
<div class="paragraph"></div>
<div class="flex / cross [ padding bottom S ]">
    <div class="Blog">
    </div>
</div> --}}
</div>
