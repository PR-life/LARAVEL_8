<div class="flex cI / v-DB -on">
    <div class="Min Max -w2 / none_80">
        <b class="content-s / Grey -c30" title="{{$Var->created_at}}">
            @include('zADMIN.combine.Teaser._wrap.ellipsis.name_plus_h2',['Var' => $Var->dateAsCarbon->diffForHumans(), 'css' => 'noEvents'])
        </b>
    </div>
    <div class="Min Max -w2 center-text">      
        <span class="content-xxs nowrap / Grey -c30">order: {{$Var->order}}</span>
    </div>
    <div class="Min Max -w2 center-text">      
        <span class="content-xxs nowrap / Grey -c30">status: {{$Var->status}}</span>
    </div>
    <div class="Min Max -w1 / right-text">      
        <span class="content-xxs / Grey -c30">id: {{$Var->id}}</span>
    </div>
</div>