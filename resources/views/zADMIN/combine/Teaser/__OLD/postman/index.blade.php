<?php
    $className = class_basename($Var);

    $list = [
        'CommentPaper' => 'paper',
        'CommentPost' => 'post',
    ];
    $routeName = 'admin.'.$list[$className].'.edit';

?>

@component('zADMIN._wrap.Teaser.index', ['Var' => $Var])
    <div class="flex cI / cross-s space-left">


        <div class="_1 flex cC dC / Min Max -w2">
            @include('zADMIN.combine.Teaser._brick.Badge.new',['Var' => $Var->published])
            <a class="content b600" href="{{route($routeName, $item->id)}}">
                <span class="block nowrap Ellipsis">{{$Var->name}}</span>
            </a>
        </div>


        <div class="_2 / Min Max -w7">      
            <span class="content-s" title="slug">{{ Str::limit(strip_tags($Var->text),100) }}</span>
        </div>

        <div class="_4 / Min Max -w2" title="{{$Var->created_at}}">
            <b class="content block nowrap Ellipsis">{{$Var->dateAsCarbon->diffForHumans()}}</b>
        </div>


        <div class="_4 / Min Max -w3">
            @if($className == 'CommentPaper')
                <a class="content-xs x-grey" href="/ru/feedback/{{$Var->item->slug ?? $Var->item->id}}" target="_blank">
                    <span class="block / Ellipsis var-2">{{$Var->item->name ?? 'ссылка на статью'}}</span>
                </a>
            @endif
            @if($className == 'CommentPost')
                <a class="content-xs x-grey" href="{{route($routeName,$Var->item->id)}}" target="_blank">
                    <span>{{$Var->item->name ?? 'ссылка на статью'}}</span>
                </a>
            @endif
        </div>
 
        <div class="_5">
            @include('zADMIN._brick.manager.basket', ['class' => 'postman.'.class_basename($Var), 'id' => $Var->id])
        </div> 
    </div>
@endcomponent