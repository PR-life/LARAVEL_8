@component('zADMIN._wrap.Teaser.index', ['Var' => $Var, 'css' => 'space-left'])
    <div class="flex bC">
        <div class="flex cI / cross-xl">
            <div class="_1 flex cC dC / Min Max -w6">
                @if($Var->sku)
                    @include('zADMIN.combine.Teaser.lib.brick.slug', ['incoming_param' => $Var->sku])
                @endif
                <a class="content" href="{{ route('admin.'.mb_strtolower(class_basename($Var)).'.edit', $Var->id) }}">
                    @include('zADMIN.combine.Teaser._wrap.ellipsis.name',['Var' => $Var->param_1 ?? $Var->sms])
                </a>
            </div>
            <div class="_2 / Min Max -w2 / center-text">
                <div class="content-xs / Grey -c30">{{$Var->type}}</div>
            </div>
            <div class="_3">
                <div class="content-xs / Grey -c30">{{$Var->name}}</div>
            </div>
        </div>

        <div class="flex bC cI / cross-s / W-100">
            <div class="Min -w1"></div>
            <div class="W-100">
                @include('zADMIN.combine.Teaser._brick.data.selva',['Var' => $Var, 'css' => '_5'])
            </div>
            <div class="_7 / flex cI cross-s">
                @include('zADMIN.combine.Teaser._brick.data.db',['Var' => $Var, 'css' => '_5'])
                @include('zADMIN._brick.manager.basket', ['class' => class_basename($Var), 'id' => $Var->id])
            </div>
        </div>
    </div>
@endcomponent