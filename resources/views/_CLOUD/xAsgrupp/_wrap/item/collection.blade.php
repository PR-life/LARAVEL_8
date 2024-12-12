@component('_wrap._teaser.wrap.item')
    @slot('css16111209','-Gaud vol-collection x-border x-shadow')

    <div class="paragraphX2"></div>
    <div class="gaud-28111054 / relative">
        <div class="_gaud"></div>
    </div>
    <div class="gaud-28111055 / relative _indexMax"></div>

    <a href="{{$link}}" class="_wrap / block hidden relative index">

        @include('_._brick.img.squere',['css09071611'=> 'W-100'])
        <span class="block / paragraphX2"></span>
        <span class="block / paragraphX2"></span>

        <span class="_img / Abs -all / flex cI cC">
            <img class="Img -cover" src="{{$image ?? '/images-0/catalog/package.png'}}" alt="">
        </span>

        <span class="Abs -all / Veil -dark">
            <span class="_mid"></span>
        </span>

        <span class="Abs -all / flex cI cC / -Black">
            <span class="center-text / void-s">
                @isset($prev_p)
                <span class="p / block">{!!$prev_p!!}</span>
                @endisset
                <span class="h -index_PC -lineHeight c-h / block">{!!$prev_h!!}</span>
            </span>
        </span>
    </a>
@endcomponent