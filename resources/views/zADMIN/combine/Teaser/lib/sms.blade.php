@component('zADMIN._wrap.Teaser.index', ['Var' => $Var, 'css' => 'space-left'])
    <div class="flex bC">
        <div class="flex cI / cross-s">
            <div class="_1 flex cC dC / Max -w8">
                @if($Var->sku)
                    @include('zADMIN.combine.Teaser.lib.brick.slug', ['incoming_param' => $Var->sku])
                @endif
                <a class="content" href="{{ route('admin.'.mb_strtolower(class_basename($Var)).'.edit', $Var->id) }}">
                    @include('zADMIN.combine.Teaser._wrap.ellipsis',['Var' => $Var->param_1 ?? $Var->from_page])
                </a>
            </div>
        </div>

        <div class="flex cI / cross-s">


                    {{-- <div class="noEvents">
                        @component('_._brick.Checkbox.beregovoy', ['css' => $cssCheckbox ?? ''])
                            <input  type="checkbox" {{$Var->go_mod_talk ? 'checked' : ''}}>
                        @endcomponent
                    </div> --}}


            @include('zADMIN.combine.Teaser._brick.data.sms',['Var' => $Var, 'css' => '_5'])
            <div class="_7">
                @include('zADMIN._brick.manager.basket', ['class' => class_basename($Var), 'id' => $Var->id])
            </div>
        </div>
    </div>
@endcomponent