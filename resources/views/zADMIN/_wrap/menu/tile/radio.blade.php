<div>
    <input id="{{$id}}_{{$param}}" class="none" type="radio" name="{{$name}}" value="{{$param}}" {{$param == $bd ? 'checked' : ''}}>
    <label for="{{$id}}_{{$param}}" class="Bone content-xs / space-s round-s relative">
        <span class="content-xxs"></span>
        <span class="x-text {{$cssName ?? ''}}">{!!$slot!!}</span>
    </label>							
</div>