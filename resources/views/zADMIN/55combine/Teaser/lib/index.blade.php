@component('zADMIN._wrap.teaser.index', ['Var' => $Var, 'css14051235' => 'space-left'])
    <div class="flex bC">
        <div class="flex cI / cross-s">
            <div class="_1 flex cC dC / Max -w11">
                @if($Var->slug)
                    @include('zADMIN.combine.Teaser.lib.brick.slug')
                @endif
                <a class="content" href="{{ route('admin.'.mb_strtolower(class_basename($Var)).'.edit', $Var->id) }}">
                    @include('zADMIN.combine.Teaser._wrap.ellipsis.name_plus_h2',['Var' => $Var->name ?? $Var->created_at])
                </a>
            </div>
        </div>

        <div class="flex cI / cross-s">
            @include('zADMIN.combine.Teaser._brick.data.index',['Var' => $Var, 'css' => '_5'])
            <div class="_7">
                @include('zADMIN._brick.manager.basket', ['class' => class_basename($Var), 'id' => $Var->id])
            </div>
        </div>
    </div>
@endcomponent