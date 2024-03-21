<div>
    <input id="{{$id}}" class="none" type="radio" name="{{$name}}" value="{{$value}}" {{$param == $value ? 'checked' : ''}}>
    <label for="{{$id}}" class="Bone content-xs / space-s round-s relative">
        <span class="content-xxs"></span>
        <span class="x-text {{$cssName ?? ''}}">{!!$slot!!}</span>
    </label>							
</div>