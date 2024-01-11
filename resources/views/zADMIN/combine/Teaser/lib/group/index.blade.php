@component('zADMIN._wrap.Teaser.index', ['Var' => $group, 'css' => 'space-left'])

    <div class="flex bC">

        <div class="flex cI / cross-s">

            <div class="_1 flex cC dC">

                @if($group->slug)
                <div class="v-Lite -off">
                    <div class="paragraph / v-Seo -on"></div>
                    <div class="Wings">
                        <div class="_win -t">
                            <div class="content-xxs / Grey -c30">{{$group->slug}}</div>
                        </div>
                    </div>
                </div>
                @endif

                <a class="flex cI -wrap cloud / content / cross-xs" href="{{ route('admin.'.mb_strtolower(class_basename($group)).'.edit', $group->id) }}">
                    <span>{!!$group->name!!}</span>
                </a>
            </div>
    
        </div>
        <div class="flex cI / cross-s">
            @include('zADMIN.combine.Teaser._brick.dataMin',['Var' => $group, 'css' => '_5'])
            
            <div class="_7">
                @include('zADMIN._brick.manager.basket', ['class' => class_basename($group), 'id' => $group->id])
            </div>
        </div>
 
    </div>

@endcomponent