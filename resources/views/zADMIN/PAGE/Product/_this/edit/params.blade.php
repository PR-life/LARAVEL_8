<?
$arr_17062153 = [
    [
        'name' => 'price',
        'param' => 'price',
    ],
    [
        'name' => 'price_name',
        'param' => 'price_name',
    ],
    [
        'name' => 'param_liters',
        'param' => 'param_liters',
    ],
    [
        'name' => 'скидка %',
        'param' => 'discount_percentage',
    ],
    [
        'name' => 'price_old',
        'param' => 'price_old',
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
 
@endcomponent