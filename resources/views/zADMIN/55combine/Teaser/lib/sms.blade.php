@component('zADMIN._wrap.Teaser.index', ['Var' => $Var, 'css' => 'space-left'])
    <div class="flex bC">
        <div class="flex cI / cross-xl">
            <div class="_1 flex cC dC / Min Max -w6">
                @if($Var->sku)
                    @include('zADMIN.combine.Teaser.lib.brick.slug', ['incoming_param' => $Var->sku])
                @endif
                <a class="content" href="{{ route('admin.'.mb_strtolower(class_basename($Var)).'.edit', [
                        mb_strtolower(class_basename($Var)) => $Var->id,
                        'name' => $name ?? null,
                        'page' => $page ?? null,
                        'tag_id' => $tag_id ?? null,
                        'category_id' => $category_id ?? null,
                        'group_id' => $group_id ?? null
                    ])
                    }}"
                >
                    @include('zADMIN.combine.Teaser._wrap.ellipsis.name',['Var' => $Var->sms ?? $Var->from_page])
                </a>
            </div>


 



            {{-- <div class="_2 / Min Max -w1 / center-text">
                <div class="content-xs / Grey -c30">{{$Var->type}}</div>
            </div> --}}
            {{-- <div class="_3 / Min Max -w1 / center-text">
                <div class="content-xs / Grey -c30">{{$Var->label}}</div>
            </div> --}}
            <div class="_4">
                <div class="content-xs nowrap / Grey -c30">{{$Var->name}}</div>
            </div>



        </div>

        <div class="flex bC cI / W-100">
            <div class="Min -w1"></div>
            <div class="W-100 / v-Selva -on / dC">
                @include('zADMIN.combine.Teaser._brick.data.selva',['Var' => $Var, 'css' => '_5'])
            </div>
            <div class="Min -w1"></div>
            <div class="_7 / flex cI cross-s">
                @include('zADMIN.combine.Teaser._brick.data.db',['Var' => $Var, 'css' => '_5'])
                @include('zADMIN._brick.manager.basket', ['class' => class_basename($Var), 'id' => $Var->id])
            </div>
        </div>
    </div>
@endcomponent