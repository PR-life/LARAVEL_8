<div class="none D-Relation -on / flex bC / manager-showParamNone / Min -w2 / hidden @isset($param_seo) Roll_PC -scrollBar @endisset"> 
    
    <div class="mr-2">
        @if($Var->tags->count())
            <ul class="menu -tag -XXS / lie cloud">
                @foreach($Var->tags as $_tag)
                    <li><a class="nowrap content-xxxs round-xs" href="{{route('admin.tag.edit', $_tag->id)}}" target="_blank">{{$_tag->name}}</a></li>
                @endforeach
            </ul>
        @endif
    </div>




    <div class="x-HMin flex dC / Min Max -w2 / W-100">
        


        @isset($Var->tag)
        <a class="content-xxs nowrap / flex cI / Grey -c30" href="{{route('admin.tag.edit', $Var->tag->id)}}">
            <span class="Ico -XS / mr-2">@svg('magnet')</span>
            {{$Var->tag->name}}
        </a>
        <div class="paragraph-s"></div>
        @endisset
        @isset($Var->category)
        <div class="@isset($param_seo) D-Seo -off @endisset">
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