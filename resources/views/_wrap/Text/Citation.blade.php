<div id="{{$id ?? ''}}" class="Citation {{$css ?? ''}}">
			
    {!!$slot!!}

    <div class="author / flex">
        <span class="_name b600 mr-2">— {{$author}}</span> <span class="Grey / Ellipsis">{{$author_description ?? ''}}</span>
    </div>
</div>  