<div id="Responses" class="Responses {{$wrap14061146 ? '' : 'Plot -hMin -XS'}} [ padding top bottom ]">
    <div class="Medium -S / edge-S_PC">
        <div class="Chat -entropy / Entropy Void Edge">
            {!!$slot!!}
        </div>
    </div>
    {{-- @if(isset($Var->answer))
        <div class="hMin b500 center-text">Ответ представителя компании</div>
        <div class="paragraph"></div>
        <div class="Edge edge-s">
            <div class="Citation aura -mbl -mblPC / face face-out face-bottom -faceAuthor_mbl var-alfa">
                <div class="content Void">
                    {!!$Var->answer!!}
                </div>
                <div class="author">
                    <span class="name">— ООО Альфа-Мед,</span> <span class="Grey">представитель компании</span>
                </div>
            </div>
        </div>
        <div class="hill"></div>
    @endif --}}


    {{-- @if(isset($Var) && count($Var) > 0)
        <div class="h b600 center-text / [ margin bottom S ]">{{__('mod/Responses.name')}}</div>
        <div class="Medium -S / edge-S_PC">
            <div class="Chat -entropy / Entropy Void Edge">
                @foreach($Var as $item)
                    <div class="Q -M / face face-padding face-top" data-click data-css data-toggle='On'>
                        <div class="_wrap relative">
                            <div class="content / Void / lineClamp var-3 owl-lineClamp / pointer">
                                <p>
                                    {!!strip_tags($item->text, ['a','br'])!!}
                                </p>
                            </div>
                        </div>
                        <div class="Preamble -row -S">
                            <div class="content-s / Grey">{{$item->name}}</div>
                            <div class="content-s / Grey">
                                {{$item->dateAsCarbon->diffForHumans()}}
                            </div>
                        </div>
                    </div>
                    @if(isset($item->answer) && $item->answer != null)
                        @include('_._brick.A.index',['Var' => $item])
                    @endif
                @endforeach
            </div>
        </div>
        <div class="hill-m"></div>
    @else
        <div class="h b500 center-text">{{__('z/mod/Responses.nameOff')}}</div>
        <div class="paragraph-s"></div>
        <div class="content-s center-text Grey">{{__('z/mod/Responses.startComment')}}</div>
        <div class="paragraph"></div>
    @endif --}}

    {{-- <div class="x-Goo">
        <div class="flex cC / mrgn">
            <div id="btnPostman" class="x-btn / orb pointer" data-click data-goto='formPostman' data-foo='click' data-form='Form_Lite' form-param='Responses'>
                <span class="noEvents">
                </span>
            </div>
        </div>
    </div> --}}
</div>