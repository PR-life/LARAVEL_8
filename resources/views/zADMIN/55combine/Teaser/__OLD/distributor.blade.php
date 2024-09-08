@component('zADMIN._wrap.teaser.index', ['Var' => $Var])
    <div class="flex cI / cross-s">
        <a class="_1 / flex cI / cross-xs / Min Max -w5" href="{{$route}}">
            <div class="Ava -S">
                <img src="/images-0/flags/1x1/{{$Var->flag}}.svg" alt="">
            </div>
            <span class="content / nowrap Ellipsis" title="{{$Var->name}}">
                <span>{{$Var->name}}</span>
            </span>
        </a>
        <div class="_3 / Min Max -w4">      
            <span class="content-s">
                {{$Var->company}}
            </span>
        </div>
        <div class="_3 / Min Max -w4">      
            <span class="content-s">
                {{$Var->person}}
            </span>
        </div>
        <div class="_4">
            <b class="content">{{$Var->dateAsCarbon->diffForHumans()}}</b>
        </div>
        <div class="_5">
            @include('zADMIN._brick.manager.basket', ['class' => class_basename($Var), 'id' => $Var->id])
        </div>

    </div>
@endcomponent