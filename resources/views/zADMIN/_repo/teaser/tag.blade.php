
{{-- @include('zADMIN/combine/Teaser/lib/666seo') --}}



@component('zADMIN._wrap.Teaser.index', ['Var' => $Var, 'css' => 'space-left '])

    <div class="flex bC">

        <div class="_l / flex cI / Article / cross-s">
            <div class="flex cC dC / W-100">
                @if($Var->slug)
                    @include('zADMIN._repo.teaser.brick.slug')
                @endif

                @include('zADMIN._repo.teaser.lego.name.index')
                {{-- @include('zADMIN._repo.teaser.lego.cell.seo') --}}

 

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
            
            {{-- <div class="manager-21011524 / Min Max -w7 / v-Seo -on">
                <div class="flex dC / -Grey / v-Meta_category -off"> 
                    @isset($Var->category)
                        @if($Var->category->id != 1)
                            <div class="Wings">
                                <div class="_win right-text">
                                    <span class="_nameBadge / content-xxxs space-s round-s / Grey">{{$Var->category->slug}}</span>
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
            </div> --}}


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