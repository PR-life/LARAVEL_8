@component('_CLOUD.xAsgrupp._wrap.item.index')
    @slot('css16111209','x-border x-shadow categoty-'.$Var->category->slug)

    @if(isset($Var->category) && $Var->category->id == 5)
        <a class="_wrap block / hidden relative index" href="{{$link ?? '#'}}">
            <picture class="portrait relative _indexMin">
                <img class="Abs -t / Img -cover" src="https://asgrupp.ru/{{'storage/item_images/teaser/portrait/'.$Var->image}}">
            </picture>
            <span class="Abs -all / Veil" style="opacity: .5">
                <span class="_bottom" style="top: 75%"></span>
            </span>
        </a>
    @else
        <a class="_wrap block / hidden relative" href="{{$link ?? '#'}}">
            <picture class="relative">
                <img class="Abs -t" src="https://asgrupp.ru/{{'storage/item_images/teaser/square/'.$Var->image}}">
            </picture>
        </a>

    @endif

    {{-- @component('_wrap._teaser._lego.header.asgrupp')
        @slot('name',$Var->name)
    @endcomponent --}}

    {{-- @include('manager.teaser.asgrupp') --}}

    {{-- <div class="paragraph"></div> --}}
@endcomponent 