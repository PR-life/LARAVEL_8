<div class="_item W-100 {{$cssMenuRound_wrap ?? ''}} / _Axon / yesEvents relative index x-{{$loop1105 ?? 'last'}}" {!!$data ?? ''!!}>
    <div class="flex W-100 / _Axon / space-left space-rightS / relative">
        @isset($burger11051411)
            {!!$burger11051411!!}
        @endisset
        <div class="_name Axon / flex cI bC W-100">
            {{$name1105}}
            @isset($ico11051411)
                {!!$ico11051411!!}
            @endisset
        </div>
    </div>
    <div class="_open relative none">
        {!!$slot!!}
    </div>
</div>