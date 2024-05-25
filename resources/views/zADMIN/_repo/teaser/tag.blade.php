<?php

// if(($Var->category && $Var->categories && $Var->name_2) || $Var->status == '200') {
//     $x_23101421 = 'x-full';
// }else {
//     $x_23101421 = 'x-empty';
// };

$css_22051730 = 'space-left';


if(isset($Var->group)) {
    $css_22051730 .= ' group-' . $Var->group->slug;
}



?>


@component('zADMIN._wrap.Teaser.index', ['Var' => $Var, 'css14051235' => $css_22051730])

    <div class="flex bC">

        <div class="_l / flex cI / Article / cross-s">
            <div class="flex cC dC / W-100">
                @if($Var->slug)
                    @include('zADMIN._repo.teaser.brick.slug')
                @endif

                @include('zADMIN._repo.teaser.lego.name.tag')
            </div>
    
        </div>



        <div class="_r / flex sI / cross-s">




            <div class="none D-Relation -on / cross">
                @if($Var->categories->count())
                    <ul class="menu -tag -XS / lie cloud">
                        @foreach($Var->categories as $_category)
                            <li><a class="nowrap" href="{{route('admin.category.edit', $_category->id)}}" target="_blank">{{$_category->name}}</a></li>
                        @endforeach
                    </ul>
                @endif
                @isset($Var->category)
                <div class="Min -w2 / right-text">
                    <a class="content-s / b600 Grey" href="{{route('admin.category.edit', $Var->category->id)}}">
                        @include('_wrap._text.ellipsis.name',['Var' => $Var->category->name])
                    </a>
                </div>
                @endisset
            </div>


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