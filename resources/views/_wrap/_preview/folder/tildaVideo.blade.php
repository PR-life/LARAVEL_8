<a class="wrap-tildaVideo / flex / index relative" href="{{$link}}">
        
    <span class="Abs -all / flex cI">
        <span class="_text / flex dC / space-s">
            <span class="content-xs Grey">{{$description ?? ''}}</span>
            <span class="paragraph-s"></span>
            <span class="h / b600">{!!$name!!}</span>
        </span>
    </span>

    
    <span class="Abs -all / flex eC cI / _indexMin">
        <span class="_ico / flex cC cI / round relative">
            <span class="Ico -L">
                <svg fill="transparent" stroke="currentColor" stroke-width="4" viewBox="0 0 512 512">
                    <polygon points="96 448 416 256 96 64 96 448">
                </svg>
            </span>
        </span>
    </span>


    <span class="Abs _nameplate / flex cC / round-s space-s / Min -w1">
        <span class="content-m">{{$tag}}</span>
    </span>

    @include('_._brick.img.A4_hor',["css" => 'Rail'])
</a>