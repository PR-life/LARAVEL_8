<div id="{{$id ?? ''}}" class="Citation {{$css ?? '-mblPC -mbl'}}">
			
    {!!$slot!!}

    <div class="paragraph-s"></div>
    <div class="content-xxs / flex">
        <span class="_name b600 mr-2">— {{$author}}</span> <span class="Grey / Ellipsis">{{$author_description ?? ''}}</span>
    </div>
</div>  