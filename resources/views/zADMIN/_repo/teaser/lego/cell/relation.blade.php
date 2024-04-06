<div class="none D-Relation -on / manager-showParamNone / Min -w2 / hidden"> 
    
    <div class="x-HMin flex cC dC">
        @isset($Var->tag)
        <div class="content-xxs / flex cI eC / Grey -c30">
            <span class="Ico -XS / mr-2">@svg('magnet')</span>
            {{$Var->tag->name}}
        </div>
        @endisset
        @isset($Var->category)
        <div class="right-text / D-Seo -off">
            <a class="content-s / b600 Grey" href="{{route('admin.category.edit', $Var->id)}}">{{$Var->category->name}}</a>
        </div>
        @endisset


        @isset($Var->category)
            <div class="Min Max -w7 / none D-Seo -on">
                <div>
                    <div class="paragraph"></div>
                    <div class="flex dC / -Grey"> 
                        @if($Var->category->id != 1)
                            <div class="Wings">
                                <div class="_win right-text">
                                    <span class="_nameBadge bg / content-xxxs space-s round-s / Grey">{{$Var->category->slug}}</span>
                                </div>
                            </div>
                            @include('zADMIN.combine.Teaser._brick.info.categoryMain', ['Var' => $Var->category])
                            @if($Var->category->en_name)
                                <div class="paragraph-s"></div>
                                @include('zADMIN.combine.Teaser._brick.info.categoryMain_en', ['Var' => $Var->category])
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        @endisset
    </div>

 
</div>