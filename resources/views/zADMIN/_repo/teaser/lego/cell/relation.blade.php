<div class="none D-Relation -on / manager-showParamNone / Min -w2 / hidden Roll_PC -scrollBar"> 
    
    <div class="x-HMin flex cC dC / W-100">
        
        @isset($Var->tag)
        <div class="content-xxs / flex cI eC / Grey -c30">
            <span class="Ico -XS / mr-2">@svg('magnet')</span>
            {{$Var->tag->name}}
        </div>
        @endisset
        @isset($Var->category)
        <div class="right-text / @isset($param_seo) D-Seo -off @endisset">
            <a class="content-s / b600 Grey" href="{{route('admin.category.edit', $Var->id)}}">
                @include('_wrap._text.ellipsis.name',['Var' => $Var->category->name])
            </a>
        </div>
        @endisset


        @isset($param_seo)
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
                                @include('zADMIN._repo.teaser.brick.seo.categoryMain', ['Var' => $Var->category])
                                @if($Var->category->en_name)
                                    <div class="paragraph-s"></div>
                                    @include('zADMIN._repo.teaser.brick.seo.categoryMain_en', ['Var' => $Var->category])
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            @endisset
        @endisset
    </div>

 
</div>