@component('zADMIN._wrap.teaser.index', ['Var' => $Var, 'css14051235' => 'space-left'])

    <div class="flex cI / cross-s">
        <div class="_1 flex cC dC / Min Max -w3">
            @include('zADMIN.combine.Teaser._brick.Badge.new',['Var' => $Var->mafia])
            <a class="content b600" href="{{$route}}">
                @include('zADMIN.combine.Teaser._wrap.ellipsis.name_plus_h2',['Var' => $Var->name])
            </a>
        </div>


        <div class="_4 / Min Max -w7">      
            <span class="content-s">{{ Str::limit(strip_tags($Var->sms),100) }}</span>
        </div>

        <div class="_2 / Min Max -w2 / center-text / none_90">      
            <b class="content-s">
                @include('zADMIN.combine.Teaser._wrap.ellipsis.name_plus_h2',['Var' => $Var->country])
            </b>
        </div>

        <div class="_3 / Min Max -w2 / none_100">      
            <b class="content-s">
                @include('zADMIN.combine.Teaser._wrap.ellipsis.name_plus_h2',['Var' => $Var->city])
            </b>
        </div>


        

        <div class="_6 / Min Max -w3">
            <div class="flex">
                @svg('favorite')
                <div class="content-s">Конверсия</div>
            </div>
            {{-- <b class="content-s"> --}}
                {{-- @include('zADMIN.combine.Teaser._wrap.ellipsis.name_plus_h2',['Var' => $Var->email]) --}}
            {{-- </b>   --}}
        </div>

        @include('zADMIN.combine.Teaser._brick.data.index',['Var' => $Var, 'css' => '_5'])
        
        <div class="_7">
            @include('zADMIN._brick.manager.basket', ['class' => class_basename($Var), 'id' => $Var->id])
        </div>
    </div>
@endcomponent