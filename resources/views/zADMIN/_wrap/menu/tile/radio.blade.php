<div>
    <input id="{{$id}}_{{$name}}" class="none" type="radio" name="{{$name}}" value="{{$value}}" {{$value == $param_from_bd ? 'checked' : ''}}>
    <label for="{{$id}}_{{$name}}" class="Bone content-xs / space-s round-s relative">
        <span class="content-xxs"></span>
        <span class="x-text {{$cssName ?? ''}}">{!!$slot!!}</span>
    </label>							
</div>