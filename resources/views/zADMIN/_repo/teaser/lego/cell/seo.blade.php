<div class="none D-Seo -on / flex cC dC"> 
    <div class="paragraph-s"></div>
 
    <span class="_description content-s / Grey">
        {!!$Var->description ?? '<em>description</em>'!!}
    </span>
    
    <div class="En none">
        <div class="paragraph"></div>
        <span class="content-s / Grey / _description">
            {!!$Var->en_description ?? '<em>en_description</em>'!!}
        </span>
    </div>
     
    @if($Var->canonical || $Var->en_canonical)
        <div class="paragraph"></div>
        @isset($Var->canonical)
            @include('zADMIN._repo.teaser.lego.cell.wrap.Badge', ['Var' => $Var->canonical, 'name' => 'canonical:'])
        @endisset
        <div class="none En -on">
            @isset($Var->en_canonical)
                @include('zADMIN._repo.teaser.lego.cell.wrap.Badge', ['Var' => $Var->en_canonical, 'name' => 'en_canonical:'])
            @endisset
        </div>
    @endif

    <div class="paragraph"></div>
    <dl class="-leftXXS void-s">
        <dt class="content-xxs Grey -c30">name_tag</dt>
        <dd class="content-xxs">{!!$Var->name_tag ?? '...'!!}</dd>
        <dt class="content-xxs Grey -c30">name_seo</dt>
        <dd class="content-xxs">{!!$Var->name_seo ?? '...'!!}</dd>
    </dl>
 



    @if($Var->tags->count())
        {{-- <div class="paragraphX2"></div> --}}
        {{-- <ul class="menu -tag -XS / lie cloud">
            @foreach($Var->tags as $tagForeach)
                <li class="{{$tagForeach->name_2 ? 'original' : ''}}"><a href="{{route('admin.tag.edit', $tagForeach->id)}}" target="_blank">{{$tagForeach->name}}</a></li>
                @if($tagForeach->name_2)
                <li class="replica {{$tagForeach->name_3 ? '' : '-last'}}"><span class="a round">{{$tagForeach->name_2}}</span></li>
                @endif
                @if($tagForeach->name_3)
                <li class="replica {{$tagForeach->name_4 ? '' : '-last'}}"><span class="a round">{{$tagForeach->name_3}}</span></li>
                @endif
                @if($tagForeach->name_4)
                <li class="replica {{$tagForeach->name_5 ? '' : '-last'}}"><span class="a round">{{$tagForeach->name_4}}</span></li>
                @endif
                @if($tagForeach->name_5)
                <li class="replica {{$tagForeach->name_6 ? '' : '-last'}}"><span class="a round">{{$tagForeach->name_5}}</span></li>
                @endif
                @if($tagForeach->name_6)
                <li class="replica {{$tagForeach->name_7 ? '' : '-last'}}"><span class="a round">{{$tagForeach->name_6}}</span></li>
                @endif
            @endforeach
        </ul> --}}
            
 
    @endif

</div>
