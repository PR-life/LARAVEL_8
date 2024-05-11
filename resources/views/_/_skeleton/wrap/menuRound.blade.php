<div class="_item W-100 {{$cssMenuRound_wrap ?? ''}} / relative index x-{{$loop1105 ?? 'last'}}">
    <div class="flex / space-left space-rightS / relative">
        @isset($burger11051411)
            {!!$burger11051411!!}
        @endisset
        <div class="_name W-100 / p / flex cI bC">
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