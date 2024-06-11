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

        <div class="_l / flex cI / cross-s" style="max-width: var(--Article); min-width: var(--w-10060747)">
            <div class="flex cC dC / W-100">
                @if($Var->slug)
                    @include('zADMIN._repo.teaser.brick.slug')
                @endif
                @include('zADMIN._repo.teaser.lego.name.seo_en')
                @include('zADMIN._repo.teaser.lego.cell.seo')
            </div>
        </div>
        
        <div class="_r / flex sI / cross-s">
            @include('zADMIN._repo.teaser.lego.cell.relation', ['param_seo' => true])

            <div class="x-HMin flex cI / Max -w6">
                <div class="D-Lite -off">
                    @include('zADMIN._repo.teaser.lego.cell.bd.date')
                </div>
                @include('zADMIN._repo.teaser.lego.cell.bd.min')
            </div>
            <div class="_last / D-Shield -off / x-HMin flex cI">
                {{-- @include('zADMIN._brick.manager.basket', ['class' => class_basename($Var), 'id' => $Var->id, 'css' => 'Grey']) --}}
            </div>
        </div>
    </div>
@endcomponent