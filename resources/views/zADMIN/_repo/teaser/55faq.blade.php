@component('zADMIN._wrap.Teaser.index', ['Var' => $Var, 'css' => 'space-left '])
<div class="flex bC">
    <div class="_l / flex cI / Article / cross-s">
        <div class="flex cC dC / W-100">
            @include('zADMIN._repo.teaser.lego.name.index')
        </div>
    </div>
    <div class="_r / flex sI / cross-s">
        @include('zADMIN._repo.teaser.lego.cell.relation')
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