<div class="aura void / Max -{{$w ?? 'w7'}} / edge">
    @isset($name)
    <div class="{{$h ?? 'h2'}} -vw / b600">{!!$name!!}</div>
    @endisset
    <div class="paragraphX2"></div>
    {!!$slot!!}
</div>