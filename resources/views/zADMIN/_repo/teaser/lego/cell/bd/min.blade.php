{{-- <div class="flex"> --}}
    {{-- <div class="v-Selva -on">
        <div class="space-rightM">

            <div class="right-text">                
                @isset($Var->tag_id)
                <div class="content-xxs / flex cI / Grey -c30">
                    <span class="Ico -S / mr-2">@svg('magnet')</span>
                    {{$Var->tag->name}}
                </div>
                <div class="paragraph-s"></div>
                <a class="content-s b600 / Grey -c30" href="{{route('admin.category.edit',$Var->category->id)}}">{{$Var->category->name}}</a>
                @endisset
    
                @isset($Var->category)
                <a class="content-s b600 / Grey -c30" href="{{route('admin.category.edit',$Var->category->id)}}">{{$Var->category->name}}</a>
                @endisset
            </div>

 
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
    </div> --}}



<div class="flex -wrap dRR / {{$css ?? 'Grey -c30'}} / none D-Db -on">

    <div class="Min Max -w1 / right-text">      
        <span class="content-xxs">id: {{$Var->id}}</span>
    </div>
    <div class="Min Max -w2 center-text">      
        <span class="content-xxs nowrap">status: {{$Var->status}}</span>
    </div>
    <div class="Min Max -w2 center-text">      
        <span class="content-xxs nowrap">order: {{$Var->order}}</span>
    </div>


</div>

{{-- </div> --}}
 