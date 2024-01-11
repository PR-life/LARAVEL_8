<?php

 
if(($tag->category && $tag->categories && $tag->name_2) || $tag->status == '200') {
    $x_23101421 = 'x-full';
}else {
    $x_23101421 = 'x-empty';
};

?>

@component('zADMIN._wrap.Teaser.index', ['Var' => $tag, 'css' => 'space-left '.$x_23101421])

    <div class="flex bC -wrap">

        <div class="flex cI / cross-s">
            <div class="_1 flex cC dC / Max -w11">

                @if($tag->slug)
                <div class="v-Lite -off">
                    <div class="paragraph / v-Seo -on"></div>
                    <div class="Wings">
                        <div class="_win -t">
                            <div class="content-xxs / Grey -c30">{{$tag->slug}}</div>
                        </div>
                    </div>
                </div>
                @endif

 
                @include('zADMIN.combine.Teaser.lib.tag.lego.nameSeo')


                @if($tag->categories)
                    <div class="flex v-Seo -on / -Grey">
                        @foreach($tag->categories as $categoryForeach)
                            @include('zADMIN.combine.Teaser._brick.info.category', ['Var' => $categoryForeach])
                        @endforeach
                    </div>
                @endif

            </div>
        </div>

        <div class="flex cI / cross-s">
            <div class="flex dC / Min Max -w7 / -Grey / v-Seo -on">
                @isset($tag->category)
                    @if($tag->category->id != 1)
                        <div class="Wings">
                            <div class="_win right-text">
                                <span class="_nameBadge / content-xxs space-xs round-s / Grey">{{$tag->category->slug}}</span>
                            </div>
                        </div>
                        @include('zADMIN.combine.Teaser._brick.info.categoryMain', ['Var' => $tag->category])
                        @if($tag->category->en_name)
                            <div class="paragraph-s / EN"></div>
                            @include('zADMIN.combine.Teaser._brick.info.categoryMain_en', ['Var' => $tag->category])
                        @endif
                    @endif
                @endisset
            </div>


            @include('zADMIN.combine.Teaser._brick.dataMin',['Var' => $tag, 'css' => '_5'])
            
            <div class="_7 / flex cI cross">
                @include('zADMIN._brick.manager.basket', ['class' => class_basename($tag), 'id' => $tag->id])
            </div>
        </div>
 

    </div>

@endcomponent