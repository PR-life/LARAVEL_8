@component('zADMIN._wrap.teaser.index', ['Var' => $Var, 'css14051235' => 'space-left'])
    <div class="flex bC">
        <div class="flex cI / cross-s">
            <div class="_1 flex / Min -w4">
                <a class="flex cI / cross-xs" href="{{ route('admin.'.mb_strtolower(class_basename($Var)).'.edit', $Var->id) }}">
                    <span class="Ava round-50 hidden">
                        @isset($Var->avatar)
                        <img src="{{$Var->avatar}}" alt="">
                        @else
                        <img src="/images-0/ava_face.png" alt="">
                        @endisset
                    </span>
                    <span class="content">
                        @include('zADMIN.combine.Teaser._wrap.ellipsis.name_plus_h2',['Var' => $Var->name ?? $Var->created_at])
                    </span>
                </a>
            </div>
            <div class="_2">
                <div class="content Grey">
                    {{$roles[$Var->role]}}
                </div>
            </div>
        </div>

        {{-- <div class="flex cI / cross-s">
            @include('zADMIN.combine.Teaser._brick.data.index',['Var' => $Var, 'css' => '_5'])
            <div class="_7">
                @include('zADMIN._brick.manager.basket', ['class' => class_basename($Var), 'id' => $Var->id])
            </div>
        </div> --}}
    </div>
@endcomponent