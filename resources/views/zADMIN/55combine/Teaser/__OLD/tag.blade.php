@component('zADMIN._wrap.teaser.index', ['Var' => $Var])
    <div class="flex cI / cross-s space-left">
        <a class="_1 / Min Max -w4" href="{{$route}}">
            <span class="content / nowrap Ellipsis" title="{{$Var->name}}">
                <span>{{$Var->name}}</span>
            </span>
        </a>
        <div class="_2 / Min Max -w2">      
            <span class="content-s" title="sku">{!!$Var->sku ?? '<em>sku</em>'!!}</span>
        </div>
        <div class="_3 / Min Max -w2">      
            @include('zADMIN.combine.Teaser._brick.slug')
        </div>
        <div class="_4">
            <b class="content">{{$Var->dateAsCarbon->diffForHumans()}}</b>
        </div>
        <div class="_5">
            @include('zADMIN._brick.manager.basket', ['class' => class_basename($Var), 'id' => $Var->id])
        </div>
    </div>
@endcomponent