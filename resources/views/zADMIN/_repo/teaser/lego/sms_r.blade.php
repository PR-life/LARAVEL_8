<div class="_r / flex sI / cross-s">
    @include('zADMIN._repo.teaser.lego.cell.relation', ['param_seo' => true])
    <div class="x-HMin flex cI">
        @include('zADMIN._repo.teaser.lego.cell.bd.date')
        <div class="D-Lite -off">
            @include('zADMIN._repo.teaser.lego.cell.bd.min')
        </div>
    </div>
    <div class="_last / D-Shield -off / x-HMin flex cI">
        @include('zADMIN._brick.manager.basket', ['class' => class_basename($Var), 'id' => $Var->id, 'css' => 'Grey'])
    </div>
</div>