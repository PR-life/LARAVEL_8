<div class="v-Selva -on">
    <div class="space-rightM / W-100">

        <div class="right-text">                
            @isset($Var->tag_id)
            <div class="Wings">
                <div class="_win -t">
                    <div class="content-xxs / flex cI / Grey -c30">
                        <span class="Ico -S / mr-2">@svg('magnet')</span>
                        {{$Var->tag->name}}
                    </div>
                </div>
            </div>
            <div class="paragraph-s"></div>

            @endisset

            @isset($Var->category)
            <a class="content-s b600 / Grey -c30" href="{{route('admin.category.edit',$Var->category->id)}}">{{$Var->category->name}}</a>
            @endisset
        </div>

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
            @include('zADMIN.combine.Teaser._wrap.ellipsis.name_plus_h2',['Var' => $Var->dateAsCarbon->diffForHumans(), 'css' => 'noEvents'])
        </b>
    </div> --}}
</div>