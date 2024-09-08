@component('zADMIN._wrap.teaser.index', ['Var' => $Var, 'css' => 'space-left '])

    <div class="flex bC">

        <div class="_l / flex cI / Article / cross-s">
            <div class="flex cC dC / W-100">

                <div class="wrap-name / flex cI">
                    @include('zADMIN._repo.teaser.brick.a_openTag')
                        <span class="_name / flex cI cross-xxs">
                            @include('_wrap._text.ellipsis.name',['Var' => $Var->name])
                        </span>
                    </a>
                </div>
                
            </div>
    
        </div>


        <div class="_r / flex sI / cross-s">

            <div class="x-HMin flex cI">
                @include('zADMIN._repo.teaser.lego.cell.bd.date')
                @include('zADMIN._repo.teaser.lego.cell.bd.min')
            </div>
            
            {{-- <div class="_last / D-Shield -off / x-HMin flex cI">
                @include('zADMIN._brick.manager.basket', ['class' => class_basename($Var), 'id' => $Var->id, 'css' => 'Grey'])
            </div> --}}
        </div>

    
    </div>

@endcomponent