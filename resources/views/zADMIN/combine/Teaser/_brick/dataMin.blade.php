<div class="flex cI / v-Data -on">
    <div class="flex cross">
        <div class="{{$css}} / Min Max -w2 / none_80">
            <b class="content-s / Grey -c30" title="{{$Var->created_at}}">
                @include('zADMIN.combine.Teaser._wrap.ellipsis',['Var' => $Var->dateAsCarbon->diffForHumans(), 'css' => 'noEvents'])
            </b>
        </div>
    </div>
    <div class="Min Max -w1">      
        <span class="content-xxs nowrap / Grey -c30">order: {{$Var->order}}</span>
    </div>
    <div class="Min Max -w1 / right-text">      
        <span class="content-xxs / Grey -c30">id: {{$Var->id}}</span>
    </div>
</div>
 