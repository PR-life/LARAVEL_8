<div id="{{$id ?? ''}}" class="Citation {{$cssCitation ?? '-mblPC -mbl'}}">
			
    {!!$slot!!}

    <div class="paragraph-s"></div>
    <div class="content-xxs / flex">
        <span class="_name b600 mr-2">— {{$author ?? 'Life'}}</span> <span class="Grey / Ellipsis">{{$author_description ?? 'связи с общественностью'}}</span>
    </div>
</div>  