<div id="{{$id ?? 'Flaber_edit'}}" class="Flaber {{$css_27041452 ?? ''}} / _Axon Axon / relative" {!!$data ?? ''!!}>
    {{$before_Flaber ?? ''}}
    <div class="_flaber / _Axon Axon">
        {{$indent_Flaber ?? ''}}
        {{ $slot ?? ''}}

        @switch($style_off ?? '')
            @case('ARIK')
                <div class="none on / {{$flaber_w ?? 'Min -w6'}}"></div>
                <div class="ARIK -XL -On"></div>
                @break
            @case('KIRA')
                <div class="none on / {{$flaber_w ?? 'Sms -w'}}"></div>
                <div class="ARIK -XL -On"></div>
                @break
            @default
                {{-- <div class="KIRA -sms"></div> --}}
        @endswitch
    </div>
</div>