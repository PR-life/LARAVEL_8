<div id="{{$id ?? ''}}" class="Flaber {{$css ?? ''}} / relative" {!!$data ?? ''!!}>
    <div class="_flaber">
        {{ $slot ?? ''}}
        <div class="KIRA -sms"></div>
    </div>
</div>