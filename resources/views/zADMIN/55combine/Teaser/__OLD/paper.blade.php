@component('zADMIN._wrap.teaser.index', ['Var' => $Var, 'css14051235' => 'space-left'])

    @slot('cell_2')
    <div class="paragraph"></div>
    <div class="flex sC / cross-s">
        <div class="_1 / void-s / Min Max -w7">
            <div class="content" title="h1">{!!$Var->h1 ?? '<em>h1</em>'!!}</div>
            {{-- <div class="content" title="prev_h1">{!!$Var->prev_h1 ?? '<em>prev_h1</em>'!!}</div> --}}
            {{-- <div class="content" title="prev_h2">{!!$Var->prev_h2 ?? '<em>prev_h2</em>'!!}</div> --}}
            {{-- <div class="content" title="prev_p">{!!$Var->prev_p ?? '<em>prev_p</em>'!!}</div> --}}
        </div>
        <div class="_2 / Min Max -w9">
 
        </div>
    </div>
    @endslot


    @slot('cell_3')
    <div class="paragraph"></div>
    <div class="flex sC / cross-s">
        <div class="_1 / Min Max -w7">
            <span class="content">{!!$Var->title ?? '<em>title</em>'!!}</span>
        </div>
        <div class="_2"></div>
        <div class="_3 / Min Max -w9">
            <span class="content">{!!$Var->description ?? '<em>description</em>'!!}</span>
        </div>
    </div>
    @endslot


    <div class="flex cI / cross-s">

        <div class="_1 / Min Max -w3">
            <div class="flex cI bC">
                <a class="content b600 / nowrap W-100" href="{{$route}}">
                    <span class="block Ellipsis">
                        @if(isset($Var->demon_name))
                            {{$Var->demon_name}}						
                        @else 
                            {{$Var->user->nickname ?? $Var->user->name}}
                        @endif
                    </span>
                </a>
                @if(!$Var->mafia)
                    <div class="Ico -S / pointerHelp" title="Не провереноо А.В.">@svg('info')</div>
                @endif
            </div>
            <div class="Wings / noEvents">
                <div class="_win">
                    @foreach($roles as $id => $role)
                        @if($Var->user->role == $id)
                        <span class="content-xs">
                            {{$role}}
                        </span>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <div class="_2 / Min Max -w7 pl-2">      
            <span class="content-s" title="slug">{{ Str::limit(strip_tags($Var->text),100) }}</span>
        </div>

        <div class="_1 flex cI cC / Min Max -w3">
            <span class="content-s / nowrap Ellipsis">
                <span>{!!$Var->category->name ?? '<em>без катеории</em>'!!}</span>
            </span>
        </div>



        <div class="_2 / Min Max -w2">      
            <span class="content-s">{{$Var->schema}}</span>
        </div>

        {{-- <div class="_3 / Min Max -w2">
            @include('zADMIN.combine.Teaser._brick.slug')
        </div> --}}

        <div class="_4">
            <b class="content">{{$Var->dateAsCarbon->diffForHumans()}}</b>
        </div>

        <div class="_5">
            @include('zADMIN._brick.manager.basket', ['class' => class_basename($Var), 'id' => $Var->id])
        </div>


    </div>
@endcomponent