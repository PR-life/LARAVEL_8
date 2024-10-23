<?
$arr_09100836 = [
    [
        'name' => 'price',
        'param' => 'price',
    ],
    [
        'name' => 'price_name',
        'param' => 'price_name',
    ],
    [
        'name' => 'скидка %',
        'param' => 'discount_percentage',
    ],
    [
        'name' => 'price_old',
        'param' => 'price_old',
    ],
]

?>

@component('_wrap.__.summary')
@slot('icoCloseName', 'closeRoll')
@slot('id', 'price')
@slot('name', 'Цена')

 
    <dl class="-dot -rightS Void">

        @foreach($arr_09100836 as $_item)
        <?php
            // $Var = (object) $_item;
            $x_name = $_item['name'];
            $x_param = $_item['param'];
        ?>
        <dt class="content-xs Grey"><label for="{{$product->$x_param}}">{{$x_name}}</label></dt>
        <dd>
            <input id="{{$x_param}}" type="text" name="{{$x_param}}" value="{{$product->$x_param}}" placeholder="...">
        </dd>
 
        @endforeach

    </dl>

    @slot('plus')
        @component('_wrap.__.summary')
        @slot('icoCloseName', 'closeRoll')
        @slot('id', 'pricePlus')
        @slot('name', 'plus +')
        @slot('cssContent', 'void')
        
       
            <div class="_shell x-hr Form -S / vol-Abs net">
                <input id="price_h" type="text" name="price_h" value="{{$product->price_h}}" placeholder="...">
                <label class="Abs familySamolet" for="price_h"><svg><use xlink:href="#svg-plus"></use></svg>price_h</label>
            </div>
        
        
            <div class="_shell">
                <textarea class="content-xs" name="price_p" placeholder="price_p..." style="min-height: 140px">{{$product->price_p}}</textarea>
            </div>
        
        @endcomponent
    @endslot



@endcomponent



<?
$arr_17062153 = [
    [
        'name' => 'param_liters',
        'param' => 'param_liters',
    ],
    [
        'name' => 'param_weight',
        'param' => 'param_weight',
    ],
    // [
    //     'name' => 'string_about_price',
    //     'param' => 'string_about_price',
    // ],
]

?>

@component('_wrap.__.summary')
@slot('icoCloseName', 'closeRoll')
@slot('id', 'params')
@slot('name', 'Параметры')

 
    <dl class="-dot -rightS Void">

        @foreach($arr_17062153 as $_item)
        <?php
            // $Var = (object) $_item;
            $x_name = $_item['name'];
            $x_param = $_item['param'];
        ?>
        <dt class="content-xs Grey"><label for="{{$product->$x_param}}">{{$x_name}}</label></dt>
        <dd>
            <input id="{{$x_param}}" type="text" name="{{$x_param}}" value="{{$product->$x_param}}" placeholder="...">
        </dd>
 
        @endforeach

    </dl>
 
@endcomponent


 
@component('_wrap.__.summary')
@slot('icoCloseName', 'closeRoll')
@slot('id', 'stock')
@slot('name', 'Склад')

    <dl class="-dot -rightS Void">
        <dt class="content-xs Grey"><label for="stock_quantity">количество</label></dt>
        <dd>
            <input id="stock_quantity" type="text" name="stock_quantity" value="{{$product->stock_quantity}}" placeholder="...">
        </dd>
    </dl>
 
@endcomponent


@component('_wrap.__.summary')
@slot('icoCloseName', 'closeRoll')
@slot('id', 'plus')
@slot('name', 'Plus +')
@slot('cssContent', 'void')

    <div class="paragraph net"></div>


@endcomponent