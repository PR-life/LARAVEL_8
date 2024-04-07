{{-- <div class="v-Selva -on / space-rightM"> --}}
    {{-- <div class="space-rightM"> --}}

        {{-- <div class="right-text">                 --}}
            @isset($Var->tag_id)
            <div class="Wings">
                <div class="_win -t">
                    <div class="content-xxs / flex cI eC / Grey -c30">
                        <span class="Ico -XS / mr-2">@svg('magnet')</span>
                        {{$Var->tag->name}}
                    </div>
                    <div class="paragraph-s"></div>
                    <div class="paragraph-s"></div>
                </div>
            </div>
            @endisset

            <div class="flex eC cI">
                @isset($Var->category)
                    <a class="block mr-2 / content-s b600 / Grey -c30" href="{{route('admin.category.edit',$Var->category->id)}}">{{$Var->category->name}}</a>
                @endisset
                @if($Var->categories->count())
                <ul class="menu -XXS / lie">
                    <li>(</li>
                    @foreach($Var->categories as $_category)
                        <li>
                            <a class="content-xxs / nowrap Grey" href="{{route('admin.tag.edit', $_category->id)}}" target="_blank">{{$_category->name}}</a>
                        </li>
                        @if(!$loop->last)
                        <li>,</li>
                        @endif
                    @endforeach
                    <li>)</li>
                </ul>
                @endisset
            </div>
 

        {{-- </div> --}}

        {{-- @dd($Var->tags) --}}
        @if(count($Var->tags))
        <div class="paragraph-s"></div>
        <div class="Wings">
            <div class="_win / flex eC">
                <ul class="menu -tag -XS / flex">
                    @foreach($Var->tags as $tagForeach)
                        <li>
                            <a class="content-xxxs / nowrap round-s" href="{{route('admin.tag.edit', $tagForeach->id)}}" target="_blank">{{$tagForeach->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif

    {{-- </div> --}}
    {{-- <div class="{{$css}} / Min Max -w2 / v-DB -on / none_80">
        <b class="content-s / Grey -c30" title="{{$Var->created_at}}">
            @include('zADMIN.combine.Teaser._wrap.ellipsis.name_plus_h2',['Var' => $Var->dateAsCarbon->diffForHumans(), 'css' => 'noEvents'])
        </b>
    </div> --}}
{{-- </div> --}}