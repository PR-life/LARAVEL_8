<div class="_l W-100 / Article / flex cI bC / relative">

    <div class="Abs -left -t -b / flex dC cC pr-2 / Grey / none D-Status -on">
        @include('zADMIN._repo.teaser.brick.icoStatus')
    </div>

   @include('zADMIN._repo.teaser.brick.a_openTag',['css16041455' => 'cross-l'])
        <span class="content / Min Max -w7">
            @if($Var->sms)
            {!!Str::limit(strip_tags($Var->sms),100)!!}
            @else
            {{$Var->label}}
            @endif
        </span>
    </a>

    <div class="flex cI eC / cross">
        <div class="Min Max -w3 / right-text / hidden void-s">
            @if($Var->email)
                <div class="content nowrap">{{$Var->email}}</div>
            @endif
            @if($Var->phone)
                <div class="content nowrap">{{$Var->phone}}</div>
            @endif
            @if($Var->whatsapp)
                <div class="content nowrap">{{$Var->whatsapp}}</div>
            @endif
            @if($Var->telegram)
                <div class="content nowrap">{{$Var->telegram}}</div>
            @endif
            @if($Var->viber)
                <div class="content nowrap">{{$Var->viber}}</div>
            @endif
        </div>
        <a class="content-xxs / Grey / Min Max -w2" href="{{$Var->from_page}}" target="_blank">
            @include('_wrap._text.ellipsis.name',['Var' => str_replace("https://", "",$Var->from_page)])
        </a>
        <div class="content-s right-text / Grey / Min Max -w2">
            @include('_wrap._text.ellipsis.name',['Var' => $Var->name])
        </div>
    </div>
</div>