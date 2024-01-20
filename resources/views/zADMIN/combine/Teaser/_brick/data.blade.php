<div class="flex cI">
    <div class="v-Selva -on">
        <div class="space-rightM">
            @isset($Var->category)
            <a class="content-s b600 / Grey -c30" href="{{route('admin.category.edit',$Var->category->id)}}">{{$Var->category->name}}</a>
            @endisset

            {{-- @dd($Var->tags) --}}
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
        {{-- <div class="{{$css}} / Min Max -w2 / v-DB -on / none_80">
            <b class="content-s / Grey -c30" title="{{$Var->created_at}}">
                @include('zADMIN.combine.Teaser._wrap.ellipsis',['Var' => $Var->dateAsCarbon->diffForHumans(), 'css' => 'noEvents'])
            </b>
        </div> --}}
    </div>
    <div class="flex cI / v-DB -on">
        <div class="Min Max -w2 / none_80">
            <b class="content-s / Grey -c30" title="{{$Var->created_at}}">
                @include('zADMIN.combine.Teaser._wrap.ellipsis',['Var' => $Var->dateAsCarbon->diffForHumans(), 'css' => 'noEvents'])
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
</div>
 