<?php

if(($Var->category && $Var->categories && $Var->name_2) || $Var->status == '200') {
    $x_23101421 = 'x-full';
}else {
    $x_23101421 = 'x-empty';
};
 
if(isset($css)) {
    $x_23101421 = $x_23101421 . $css;
}

?>


@component('zADMIN._wrap.teaser.index', ['Var' => $Var, 'css' => 'space-left '.$x_23101421])


    {{-- @slot('cell_2')
        @if($Var->tags->count())
            <div class="paragraphX2"></div>
            <ul class="menu -tag -XS / lie cloud">
                @foreach($Var->tags as $tagForeach)
                    <li><a class="content-xxxs round-xs" href="{{route('admin.tag.edit', $tagForeach->id)}}" target="_blank">{{$tagForeach->name}}</a></li>
                @endforeach
            </ul>
        @endif
    @endslot --}}

    <div class="flex bC">

        <div class="_l / flex cI / Article / cross-s">
            <div class="flex cC dC / W-100">
                @if($Var->slug)
                    @include('zADMIN._repo.teaser.brick.slug')
                @endif

                @include('zADMIN._repo.teaser.lego.name.index')

            </div>
    
        </div>


        <div class="_r / flex sI / cross-s">
            @include('zADMIN._repo.teaser.lego.cell.relation', ['param_seo' => null])

            <div class="x-HMin flex cI">
                @include('zADMIN._repo.teaser.lego.cell.bd.date')
                @include('zADMIN._repo.teaser.lego.cell.bd.min')
            </div>
            
            <div class="_last / D-Shield -off / x-HMin flex cI">
                @include('zADMIN._brick.manager.basket', ['class' => class_basename($Var), 'id' => $Var->id, 'css' => 'Grey'])
            </div>
        </div>

    
    </div>

@endcomponent