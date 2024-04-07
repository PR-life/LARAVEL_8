<div class="flex -wrap / {{$css ?? 'Grey -c30'}} / none D-Db -on">
    <div class="Min Max -w2 / right-text">
        <span class="content-xxs" title="{{$Var->created_at}}">
            @include('_wrap._text.ellipsis.name',['Var' => $Var->dateAsCarbon->diffForHumans()])
        </span>
    </div>
</div>