<?php

if($Var->status == '200') {
    $x_23102159 = 'x-full';
}else {
    $x_23102159 = 'x-empty';
};

?>


@component('zADMIN._wrap.teaser.index', ['Var' => $Var, 'css' => 'space-left '.$x_23102159])

<?

 
if ($Var->name) {
    $NAME = $Var->name;
} elseif ($Var->h1) {
    $NAME = $Var->h1;
} elseif ($Var->text) {
    $NAME = Str::limit(strip_tags($Var->text),40);
} else {
    $NAME = $Var->created_at;
};


?>
    <div class="flex bC -wrap">

        <div class="flex cI / cross-s">

            <div class="_1 / flex cC dC / Max -w11">

                <div class="flex cI">
                    <a class="content-m b600" href="{{ route('admin.'.mb_strtolower(class_basename($Var)).'.edit', [mb_strtolower(class_basename($Var)) => $Var->id, 'page' => $page ?? null, 'tag_id' => $tag_id ?? null, 'category_id' => $category_id ?? null]) }}">
                        <div class="Abs -left / flex dC cC x-12012019 / Grey / v-Status -on">
                            @include('zADMIN.combine.Teaser.lib.lego.icoStatus')
                        </div>
                        <span class="flex / cross">
                            @include('zADMIN.combine.Teaser._wrap.ellipsis.name_plus_h2',['Var' => $NAME, 'css' => 'x-name'])
                            <span class="EN / content-m b300 / block oneLine555 nowrap Ellipsis x-name / Grey">{!!$Var->en_name ?? '<em>en_name</em>'!!}</span>
                        </span>                        
                    </a>
                    @if(isset($Var->pivotItem) && count($Var->pivotItem))
                        <div class="Ico -S / pointer" data-click data-node="pivot_{{$Var->id}}" data-css data-toggle='Block'>
                            @svg('compare')
                        </div>
                    @endif
                </div>


 

                <div class="v-Seo -on / flex cC dC"> 
                    <div class="paragraph-s"></div>
                    @if($Var->tags)
                        <div class="v-Meta_tags -off">
                            <div class="paragraphX2"></div>
                            <ul class="menu -tag -XS / lie cloud">
                                @foreach($Var->tags as $tagForeach)
                                    <li class="{{$tagForeach->name_2 ? 'original' : ''}}"><a href="{{route('admin.tag.edit', $tagForeach->id)}}" target="_blank">{{$tagForeach->name}}</a></li>
                                    @if($tagForeach->name_2)
                                    <li class="replica {{$tagForeach->name_3 ? '' : '-last'}}"><span class="a round">{{$tagForeach->name_2}}</span></li>
                                    @endif
                                    @if($tagForeach->name_3)
                                    <li class="replica {{$tagForeach->name_4 ? '' : '-last'}}"><span class="a round">{{$tagForeach->name_3}}</span></li>
                                    @endif
                                    @if($tagForeach->name_4)
                                    <li class="replica {{$tagForeach->name_5 ? '' : '-last'}}"><span class="a round">{{$tagForeach->name_4}}</span></li>
                                    @endif
                                    @if($tagForeach->name_5)
                                    <li class="replica {{$tagForeach->name_6 ? '' : '-last'}}"><span class="a round">{{$tagForeach->name_5}}</span></li>
                                    @endif
                                    @if($tagForeach->name_6)
                                    <li class="replica {{$tagForeach->name_7 ? '' : '-last'}}"><span class="a round">{{$tagForeach->name_6}}</span></li>
                                    @endif

                                    {{-- @if($loop->last) --}}
                                        {{-- // at last loop, code here --}}
                                    {{-- @endif --}}
                                @endforeach
                            </ul>
                            
                            <div class="EN paragraphX2"></div>

                            <ul class="menu -tag -XS / lie cloud / EN">
                                @foreach($Var->tags as $tagForeach)
                                    <li class="{{$tagForeach->en_name_2 ? 'original' : ''}}"><a href="{{route('admin.tag.edit', $tagForeach->id)}}" target="_blank">{{$tagForeach->en_name}}</a></li>
                                    @if($tagForeach->en_name_2)
                                    <li class="replica {{$tagForeach->en_name_3 ? '' : '-last'}}"><span class="a round">{{$tagForeach->en_name_2}}</span></li>
                                    @endif
                                    @if($tagForeach->en_name_3)
                                    <li class="replica {{$tagForeach->en_name_4 ? '' : '-last'}}"><span class="a round">{{$tagForeach->en_name_3}}</span></li>
                                    @endif
                                    @if($tagForeach->en_name_4)
                                    <li class="replica {{$tagForeach->en_name_5 ? '' : '-last'}}"><span class="a round">{{$tagForeach->en_name_4}}</span></li>
                                    @endif
                                    @if($tagForeach->en_name_5)
                                    <li class="replica {{$tagForeach->en_name_6 ? '' : '-last'}}"><span class="a round">{{$tagForeach->en_name_5}}</span></li>
                                    @endif
                                    @if($tagForeach->en_name_6)
                                    <li class="replica {{$tagForeach->en_name_7 ? '' : '-last'}}"><span class="a round">{{$tagForeach->en_name_6}}</span></li>
                                    @endif

                                    {{-- @if($loop->last) --}}
                                        {{-- // at last loop, code here --}}
                                    {{-- @endif --}}
                                @endforeach
                            </ul>

                        </div>
                    @endif
 
                </div>

                @if(isset($Var->pivotItem) && count($Var->pivotItem))
                <div id="pivot_{{$Var->id}}" class="Pivot / none">
                    <div class="paragraph"></div>
                    <ul class="-S ul / vol-dot">
                    @foreach($Var->pivotItem as $pivot)
                        <li>
                            <a href="{{route('admin.faq.edit',$pivot->id)}}">{{$pivot->name}}</a>
                        </li>
                     @endforeach
                    </ul>
                </div>
                @endif
            </div>
    
        </div>



        <div class="flex cI / cross-s">
            
            <div class="Min Max -w7 / v-Seo -on">
                <div class="flex dC / -Grey / v-Meta_category -off"> 
                    @isset($Var->category)
                        @if($Var->category->id != 1)
                            <div class="Wings">
                                <div class="_win right-text">
                                    <span class="_nameBadge / content-xxs space-xs round-s / Grey">{{$Var->category->slug}}</span>
                                </div>
                            </div>

                            @include('zADMIN.combine.Teaser._brick.info.categoryMain', ['Var' => $Var->category])
        
                            @if($Var->category->en_name)
                                <div class="paragraph-s"></div>
                                @include('zADMIN.combine.Teaser._brick.info.categoryMain_en', ['Var' => $Var->category])
                            @endif
                        @endif
                    @endisset
                </div>

            </div>


            @include('zADMIN.combine.Teaser._brick.data.index',['Var' => $Var, 'css' => '_5'])
            
            <div class="_7">
                @include('zADMIN._brick.manager.basket', ['class' => class_basename($Var), 'id' => $Var->id])
            </div>
        </div>

    
    </div>

@endcomponent