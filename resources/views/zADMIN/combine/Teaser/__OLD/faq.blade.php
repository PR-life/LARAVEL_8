@component('zADMIN._wrap.Teaser.index', ['Var' => $Var, 'css' => 'space-left'])
    <div class="flex cI / cross-s">
        <div class="_1 flex cI / Min Max -w9">
            <a class="content b600 / nowrap Ellipsis" href="{{$route}}">
                <span>{{$Var->name}}</span>
            </a>
        </div>

        <div class="_2 / Min Max -w3">      
            <b class="content-s">{!!$Var->category->name ?? '<em>category_id</em>'!!}</b>
        </div>

        @include('zADMIN.combine.Teaser._brick.data.index',['Var' => $Var, 'css' => '_4'])

        <div class="_5">
            @include('zADMIN._brick.manager.basket', ['class' => class_basename($Var), 'id' => $Var->id])
        </div>
    </div>
@endcomponent