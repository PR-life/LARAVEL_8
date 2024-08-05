<?php

if(($Var->category && $Var->categories && $Var->name_2) || $Var->status == '200') {
    $x_23101421 = 'x-full';
}else {
    $x_23101421 = 'x-empty';
};

isset($css) ? $x_23101421 .= $css : '';

?>

@component('zADMIN._wrap.Teaser.index', ['Var' => $Var, 'css' => 'space-left '.$x_23101421])
    <div class="flex bC">
        @include('zADMIN._repo.teaser.lego.sms_l')
        @include('zADMIN._repo.teaser.lego.sms_r')
    </div>
@endcomponent