<?php

if(($Var->category && $Var->categories && $Var->name_2) || $Var->status == '200') {
    $x_23101421 = 'x-full';
}else {
    $x_23101421 = 'x-empty';
};

?>


@component('zADMIN._wrap.Teaser.index', ['Var' => $Var, 'css' => 'space-left '.$x_23101421])

    <div class="flex bC">

        <div class="_l / flex cI / Article / cross-s">
            <div class="flex cC dC / W-100">
                @if($Var->slug)
                    @include('zADMIN._repo.teaser.brick.slug')
                @endif

                @include('zADMIN._repo.teaser.lego.name.seo_en')
                @include('zADMIN._repo.teaser.lego.cell.seo')

 

                {{-- @if(isset($Var->pivotItem) && count($Var->pivotItem))
                    <div class="Ico -S / pointer" data-click data-node="pivot_{{$Var->id}}" data-css data-toggle='Block'>
                        @svg('compare')
                    </div>
                @endif --}}


                {{-- @if(isset($Var->pivotItem) && count($Var->pivotItem))
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
                @endif --}}
            </div>
    
        </div>
        
        <div class="_r / flex sI / cross-s">
            @include('zADMIN._repo.teaser.lego.cell.relation', ['param_seo' => true])
            <div class="x-HMin flex cI">
                <div class="D-Lite -off">
                    @include('zADMIN._repo.teaser.lego.cell.bd.date')
                </div>
                @include('zADMIN._repo.teaser.lego.cell.bd.min')
            </div>
            <div class="_last / D-Shield -off / x-HMin flex cI">
                @include('zADMIN._brick.manager.basket', ['class' => class_basename($Var), 'id' => $Var->id, 'css' => 'Grey'])
            </div>
        </div>
    </div>
@endcomponent