@component('zADMIN._wrap.teaser.index', ['Var' => $Var])
    <div class="flex cI / cross-s">
        <a class="_1 / flex cI / cross-xs / Min Max -w5" href="{{$route}}">
            <div class="Ava -S / relative">
                @if($Var->avatar)
                    <img src="{{$Var->avatar}}">
                    {{-- <img src="/images-0/flags/1x1/{{$Var->flag}}.svg" alt=""> --}}
                @elseif($Var->user_id == 1)
                    <img src="/images-0/ava_face.png" style="opacity: .25">
                @else               
                    <img src=" {{$Var->user->avatar ?? '/images-0/ava_face.png'}}">
                @endif

                @isset($Var->flag)                
                <div class="Abs / x-30060003">
                    <img src="/images-0/flags/1x1/{{$consultant->flag}}.svg" alt="">
                </div>
                @endisset
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