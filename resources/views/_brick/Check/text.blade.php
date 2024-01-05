<div class="_che">
    <input id="{{$id}}" type="{{$type ?? 'checkbox'}}" name="{{$name}}" value="{{$value}}" {{isset($checked) ? 'checked' : ''}}>
    <div class="_space _text / content-s _indexMax">{!!$slot!!}</div>
    <div class="check-bg"></div>
</div>