<div id="{{$id ?? ''}}" class="Citation {{$css ?? '-mblPC -mbl / face face-xs face-bottom face-bottom_mbl'}}">
    <div class="_wrap">
        {!!$slot!!}
    </div>

    <div class="author / flex">
        <span class="_name b600 mr-2">— {{$author}}</span> <span class="Grey / Ellipsis">{{$author_description ?? ''}}</span>
    </div>
</div>  
 