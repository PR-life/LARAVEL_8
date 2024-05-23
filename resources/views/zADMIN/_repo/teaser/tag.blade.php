<?php

// if(($Var->category && $Var->categories && $Var->name_2) || $Var->status == '200') {
//     $x_23101421 = 'x-full';
// }else {
//     $x_23101421 = 'x-empty';
// };

$css_22051730 = 'space-left';


if(isset($Var->group)) {
    $css_22051730 .= ' group-' . $Var->group->slug;
}



?>


@component('zADMIN._wrap.Teaser.index', ['Var' => $Var, 'css14051235' => $css_22051730])

    <div class="flex bC">

        <div class="_l / flex cI / Article / cross-s">
            <div class="flex cC dC / W-100">
                @if($Var->slug)
                    @include('zADMIN._repo.teaser.brick.slug')
                @endif

                @include('zADMIN._repo.teaser.lego.name.tag')
            </div>
    
        </div>


        <div class="_r / flex sI / cross-s">

            <div class="x-HMin flex cI">
                @include('zADMIN._repo.teaser.lego.cell.bd.date')
                @include('zADMIN._repo.teaser.lego.cell.bd.min')
            </div>
            
            <div class="_last / D-Shield -off / x-HMin flex cI">
                @include('zADMIN._brick.manager.basket', ['class' => class_basename($Var), 'id' => $Var->id, 'css' => 'Grey'])
            </div>
        </div>

    
    </div>

@endcomponent