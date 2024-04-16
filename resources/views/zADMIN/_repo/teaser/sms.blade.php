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

        <div class="_l W-100 / Article / flex cI bC / relative">

            <div class="Abs -left -t -b / flex dC cC pr-2 / Grey / none D-Status -on">
                @include('zADMIN._repo.teaser.brick.icoStatus')
            </div>

           @include('zADMIN._repo.teaser.brick.a_openTag',['css16041455' => 'cross-l'])
                <span class="content / Min Max -w7">
                    {!!Str::limit(strip_tags($Var->sms),100)!!}
                </span>
            </a>

            <div class="flex cI eC / cross">
                <div class="content-s right-text / Grey / Min Max -w2">
                    @include('_wrap._text.ellipsis.name',['Var' => $Var->name])
                </div>
                <div class="content-xxs / Grey / Min Max -w3">
                    @include('_wrap._text.ellipsis.name',['Var' => '$Var->from_page'])
                </div>
            </div>
        </div>
        
 
        <div class="_r / flex sI / cross-s">
            @include('zADMIN._repo.teaser.lego.cell.relation', ['param_seo' => true])
            <div class="x-HMin flex cI">
                <div class="D-Lite -off">
                    @include('zADMIN._repo.teaser.lego.cell.bd.date')
                </div>
                @include('zADMIN._repo.teaser.lego.cell.bd.min')
            </div>
            <div class="_last / D-Shield -off / x-HMin flex cI">
                @include('zADMIN._brick.manager.basket', ['class' => class_basename($Var), 'id' => $Var->id, 'css' => 'Grey'])
            </div>
        </div>
    </div>
@endcomponent