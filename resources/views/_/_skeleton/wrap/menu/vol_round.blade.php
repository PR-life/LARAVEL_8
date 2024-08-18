<div class="_item Bone W-100 {{$cssMenuRound_wrap ?? ''}} / _Axon / yesEvents relative index x-{{$loop1105 ?? 'last'}}" {!!$data ?? ''!!}>
    <div class="flex W-100 / _Axon / space-left space-rightS / relative">
        <div class="x-name pl-2 pr-2 Axon / flex cI bC W-100">
            {{$name1105}}
            @isset($ico11051411)
                {!!$ico11051411!!}
            @endisset
        </div>
    </div>
    <div class="_footer / hidden">
        @isset($prev)
        <div class="_prev relative">
            {!!$prev!!}
        </div>
        @endisset
        <div class="_open relative none">
            {!!$slot!!}
        </div>
    </div>
</div>