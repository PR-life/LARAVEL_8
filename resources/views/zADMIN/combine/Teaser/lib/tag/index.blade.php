@component('zADMIN._wrap.Teaser.index', ['Var' => $tag, 'css' => 'space-left'])

    <div class="flex bC">

        <div class="flex cI / cross-s">

            <div class="_1 flex cC dC">

                @if($tag->slug)
                <div class="v-Lite -off">
                    <div class="paragraph / v-Seo -on"></div>
                    <div class="Wings">
                        <div class="_win -t">
                            <div class="content-xxs / Grey -c30">{{$tag->slug}}</div>
                        </div>
                    </div>
                </div>
                @endif

                <a class="flex cI -wrap cloud / content / cross-xs" href="{{ route('admin.'.mb_strtolower(class_basename($tag)).'.edit', $tag->id) }}">

                    <span>{!!$tag->name!!}</span>

                    @if($tag->name_2)
                        <span class="content-xs / space-s round-s / replica">{!!$tag->name_2!!}</span>
                    @endif
                    @if($tag->name_3)
                        <span class="content-xs / space-s round-s / replica">{!!$tag->name_3!!}</span>
                    @endif
                    @if($tag->name_4)
                        <span class="content-xs / space-s round-s / replica">{!!$tag->name_4!!}</span>
                    @endif
 

                    {{-- @include('zADMIN.combine.Teaser._wrap.ellipsis',['Var' => $tag->name ?? $tag->created_at]) --}}
                </a>
            </div>
    
        </div>
        <div class="flex cI / cross-s">
            @include('zADMIN.combine.Teaser._brick.data',['Var' => $tag, 'css' => '_5'])
            
            <div class="_7">
                @include('zADMIN._brick.manager.basket', ['class' => class_basename($tag), 'id' => $tag->id])
            </div>
        </div>
 
    </div>

@endcomponent