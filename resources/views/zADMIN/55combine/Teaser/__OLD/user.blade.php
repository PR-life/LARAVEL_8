@component('zADMIN._wrap.teaser.index', ['Var' => $Var])
    <div class="flex cI / cross-s">
        <a class="_1 / flex cI / cross-xs / Min Max -w4" href="{{$route}}">
            <div class="Ava -S">
                @if($Var->avatar)
                    <img src="{{$Var->avatar}}" title="{{$Var->name}}">
                @else
                    <img src="/images-0/ava_face.png" title="{{$Var->name}}">
                @endif
            </div>
            <span class="content / nowrap Ellipsis" title="{{$Var->name}}">
                <span>{{$Var->name}}</span>
            </span>
        </a>
        <div class="_2 / Min Max -w2">      
            @foreach($roles as $id => $role)
                @if($Var->role == $id)
                <span class="content-s">
                    {{$role}}
                </span>
                @endif
            @endforeach
        </div>
        <div class="_3 / Min Max -w4">      
            <span class="content-s">
                {{$Var->email}}
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