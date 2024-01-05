@component('zADMIN._wrap.Teaser.index', ['Var' => $face, 'css' => 'space-left'])

    <div class="flex bC">

        <div class="flex cI / cross-s">

            <div class="_1 flex cC dC">
                <a class="content" href="{{$route}}">
                    @include('zADMIN.combine.Teaser._wrap.ellipsis',['Var' => $face->name])
                </a>
            </div>
    
        </div>

        <div class="flex cI / cross-s">
            @include('zADMIN.combine.Teaser._brick.data',['Var' => $face, 'css' => '_5'])
            
            <div class="_7">
                @include('zADMIN._brick.manager.basket', ['class' => 'face', 'id' => $face->id])
            </div>
        </div>


    </div>

@endcomponent