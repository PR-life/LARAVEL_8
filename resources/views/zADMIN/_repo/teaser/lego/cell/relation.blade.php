<div class="none D-Relation -on W-100 / flex eC cross / manager-showParamNone / Min -w4 / hidden @isset($param_seo) Roll_PC -scrollBar @endisset"> 
    
    <div class="W-100 right-text">

        @if(isset($Var->tags) && $Var->tags->count())
            <ul class="menu -tag -XS vol-tags / lie cloud">
                @foreach($Var->tags as $_tag)
                    <li class="{{$_tag->name_2 ? 'original' : ''}}">
                        <a class="nowrap content-xxxs round-xs" href="{{route('admin.tag.edit', $_tag->id)}}" target="_blank">
                            {{$_tag->name}}

                            <span class="none En -on">{{$_tag->en_name}}</span>
                        </a>
                    </li>
                    @if($_tag->name_2)
                    <li class="none D-Seo -on inline-block / replica {{$_tag->name_3 ? '' : '-last'}}">
                        <span class="a round">
                            {{$_tag->name_2}}
                            <span class="none En -on">{{$_tag->en_name_2}}</span>
                        </span>
                    </li>
                    @endif
                    @if($_tag->name_3)
                    <li class="none D-Seo -on inline-block / replica {{$_tag->name_4 ? '' : '-last'}}">
                        <span class="a round">
                            {{$_tag->name_3}}
                            <span class="none En -on">{{$_tag->en_name_3}}</span>
                        </span>
                    </li>
                    @endif


                    {{-- Дополнить --}}

                @endforeach
            </ul>



        @endif
        @isset($Var->categories)
        @if($Var->categories->count())
            <ul class="menu -tag -XXS vol-categories / lie cloud">
                @foreach($Var->categories as $_category)
                    <li><a class="nowrap content-xs round-s" href="{{route('admin.category.edit', $_category->id)}}" target="_blank">{{$_category->name}}</a></li>
                @endforeach
            </ul>
        @endif
        @endisset
    </div>


    <div class="x-HMin flex dC / Min -w3">
        


        @isset($Var->tag)
        <a class="content-xxs nowrap / flex cI / Grey -c30" href="{{route('admin.tag.edit', $Var->tag->id)}}">
            <span class="Ico -XS / mr-2">@svg('magnet')</span>
            {{$Var->tag->name}}
        </a>
        <div class="paragraph-s"></div>
        @endisset
        @isset($Var->category)
        <div class="@isset($param_seo) D-Seo -off @endisset">
            <a class="content-s / b600 Grey" href="{{route('admin.category.edit', $Var->category->id)}}">
                @include('_wrap._text.ellipsis.name',['Var' => $Var->category->name])
            </a>
        </div>
        @endisset

        @isset($Var->parent)
        <div class="flex cI / -Grey">
            <svg viewBox="0 0 24 24"><path fill-rule="evenodd" fill="currentColor" d="m5.414 12 6.585-6.586L18.585 12 12 18.586zM5 12l-1.208-1.207L10.585 4a2 2 0 0 1 2.829 0l6.792 6.793L19 12l1.207 1.207L13.414 20a2 2 0 0 1-2.828 0l-6.793-6.793z" clip-rule="evenodd"></path></svg>
            <span class="content-xxs">{{$Var->parent->name}}</span>
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