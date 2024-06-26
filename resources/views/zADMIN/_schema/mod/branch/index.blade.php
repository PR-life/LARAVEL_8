<div class="Goo -top / bgToBottom _indexMax">
    <div class="paragraph"></div>
    @include('zADMIN._schema.mod.branch.menu')
    <div class="paragraph"></div>
</div>


<div id="branchTab" class="Tabs" localstorage-controlCss addcss='-x' param-id='branchMenu'>

        
    <div class="_shell / _tab x1">
        <div class="Branch / void-m">
     
            @foreach($array as $item)
                <?php
                    $Var = (object)$item;
                ?>
                <div id="branch_{{$Var->id}}" class="_item hill / space round-s relative">
                    <div class="flex bC">
                        <div class="content-s / b600 nowrap Ellipsis">{{$Var->name}}</div>
                        @isset($Var->tag)                                            
                        <div class="ml-2 / Badge -S -net -reverseBg {{$Var->cssTag ?? ''}}">
                            <div class="net">{{$Var->tag}}</div>
                        </div>
                        @endisset
                    </div>
                    <div class="_line"></div>
                    <div class="content-xs -lineHeight">{{$Var->description}}</div>


                    @isset($Var->new)
                        <div class="Abs -all / flex cI cC / x-new noEvents">
                            <div class="relative">
                                <div class="Abs -left / pr-2">@svg('info')</div>
                                <div class="content b600">новое</div>
                            </div>
                        </div>
                    @endisset

                    <a class="Abs -all" href="/admin/oogway/{{$Var->id}}"></a>


                </div>
            @endforeach

            <div class="last / hill-m"></div>


        </div>
    </div>
    <div class="_shell void-m / _tab x2">
        <div class="h2 center-text text-secondary" style="font-weight: 100">ВЕТОК НЕТ</div>
    </div>
    <div class="_shell void-m / _tab x3">
        <div class="h2 center-text text-secondary" style="font-weight: 100">ПУСТО</div>
    </div>


</div>
