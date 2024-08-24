<?php

if(($Var->category && $Var->categories && $Var->name_2) || $Var->status == '200') {
    $x_23101421 = 'x-full ';
}else {
    $x_23101421 = 'x-empty ';
};

isset($css) ? $x_23101421 .= $css.' ' : '';

$x_23101421 .= 'group-'.($Var->group ? $Var->group->slug : 'none');

?>
@component('zADMIN._wrap.Teaser.index', ['Var' => $Var, 'css14051235' => 'space-left '.$x_23101421])
    <div class="flex bC">
        @include('zADMIN._repo.teaser.lego.seo_l')
        @include('zADMIN._repo.teaser.lego.seo_r')
    </div>
@endcomponent