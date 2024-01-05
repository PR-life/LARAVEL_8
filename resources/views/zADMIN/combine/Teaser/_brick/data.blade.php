<div class="flex / v-Data -on">
    <div class="flex cross">
        <div>
            @isset($Var->category)
            <a class="content b600 / Grey -c30" href="{{route('admin.category.edit',$Var->category->id)}}">{{$Var->category->name}}</a>
            @endisset

            @if(count($Var->tags))
            <div class="paragraph-s"></div>
            <div class="Wings">
                <div class="_win / flex eC">
                    <ul class="menu -tag -XXS / flex">
                        @foreach($Var->tags as $tagForeach)
                            <li>
                                <a class="content-xxs / nowrap round-s" href="{{route('admin.tag.edit', $tagForeach->id)}}" target="_blank">{{$tagForeach->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
 
        </div>
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
 