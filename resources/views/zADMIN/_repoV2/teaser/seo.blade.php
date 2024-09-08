<?php
    // if(($Var->category && $Var->categories && $Var->name_2) || $Var->status == '200') {
    //     $x_23101421 = 'x-full ';
    // }else {
    //     $x_23101421 = 'x-empty ';
    // };

    // isset($css03091324) ? $x_23101421 .= $css03091324.' ' : '';

    // $x_23101421 .= 'group-'.($Var->group ? $Var->group->slug : 'none');
    $x_23101421 = '';
?>
@component('zADMIN._wrap.teaser.index', ['Var' => $Var, 'css14051235' => $x_23101421])
    <div class="flex bC">
        @include('zADMIN._repo.teaser.lego.seo_l')
        @include('zADMIN._repo.teaser.lego.seo_r')
    </div>
@endcomponent