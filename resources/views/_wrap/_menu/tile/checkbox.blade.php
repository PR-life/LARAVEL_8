<div class="_wrap {{$css28061510 ?? 'Bg -gif'}} / round-s relative index">
    <input id="{{$id}}" class="none" type="checkbox" name="{{$name}}" value="{{$value}}" {{$param == $value ? 'checked' : ''}}>
    <label for="{{$id}}" class="Bone content-xs / space-s round-s relative">
        <span class="content-xxs"></span>
        <span class="{{$cssName ?? ''}}">{!!$slot!!}</span>
    </label>
    @isset($veil28061736)
    <div class="Veil _indexMin">
        <div class="_bottom round-s"></div>
    </div>	
    @endisset
</div>