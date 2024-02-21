<div id="wrap_select_{{$id ?? 'items'}}" class="Select -js vol-withSearch {{$multiple ? '-multiple' : ''}} / index relative {{$css ?? 'Form -S'}}">

    <input id="id_checkbox_{{$id ?? 'items'}}" class="_checkbox x-ico / none" type="checkbox">

    {{-- <div class="_field content / flex -wrap / space-s cloud cloud-s" data-click data-node='parent' data-css data-toggle='opened'> --}}

    <div class="_field content-xs Grey / flex -wrap / space-s cloud cloud-s round-s / noEvents relative _indexMax">
        <span>связать с услугой...<span class="ghost">..</span></span>
    </div>
    
    <label for="id_checkbox_{{$id ?? 'items'}}" class="Abs -all x-ico / _indexMin / js-close"></label>

    <select class="_select relative" name="item_ids[]" {{$multiple ? 'multiple' : ''}}>
        {{$slot}}
    </select>

</div>