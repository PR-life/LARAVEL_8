<div class="Sms Talk -W80 {{$css ?? ''}} / Bone / index relative">
    <div class="padding top / stop_80"></div>
    <div class="I Edge -PC / stop_80">
        {{-- <div class="h">{{$name_Roll ?? $name}}</div> --}}
    </div>
    <div class="_head space content / none_80">
        {{-- <em>{{$name}}</em> --}}
    </div>
    <div class="Scroll_80">
        <div class="_scr">
            <div class="_body / Chat -entropy / Entropy / Roll_80 -edge -space -scrollBar / cross void-m">
                @foreach($Var as $item)
                    @include('_assembling.wagon_TalkQA',['Var' => $item, 'cssPreamble' => 'flex cI cross-xxs / block_80'])
                @endforeach
                <div class="Gstrm"></div>
            </div>
        </div>
    </div>
    <div class="_footer space flex cI cC / none_80">
        @include('mod.Talk._brick.btnPlus') 
    </div>
</div>

