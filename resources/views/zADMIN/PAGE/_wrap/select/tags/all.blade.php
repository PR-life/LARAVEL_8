{{-- <div class="Select / Form -S">
    {{$slot}}
</div> --}}

<div id="wrap_select_{{$id ?? 'tags'}}" class="Select -js -multiple vol-withSearch / index relative {{$css ?? 'Form -S'}}">

    <input id="id_checkbox_{{$id ?? 'tags'}}" class="_checkbox x-ico / none" type="checkbox">

    {{-- <div class="_field content / flex -wrap / space-s cloud cloud-s" data-click data-node='parent' data-css data-toggle='opened'> --}}

    <div class="_field content-xs Grey / flex -wrap / space-s cloud cloud-s round-s / noEvents relative _indexMax">
        <span>теги...<span class="ghost">..</span></span>
    </div>
    
    <label for="id_checkbox_{{$id ?? 'tags'}}" class="Abs -all x-ico / _indexMin / js-close"></label>

    <select class="_select relative" name="tag_ids[]" multiple>
        {{$slot}}
    </select>

</div>