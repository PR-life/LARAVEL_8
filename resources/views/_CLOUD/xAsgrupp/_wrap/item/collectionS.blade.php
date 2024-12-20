@component('_wrap._teaser.wrap.item')
    @slot('css16111209','-Gaud vol-collection collection-s x-border')

    <div class="paragraph"></div>
    <div class="gaud-28111054 / relative">
        <div class="_gaud"></div>
    </div>
    <div class="gaud-28111055 / relative _indexMax"></div>

    <a href="{{$link ?? '#'}}" class="_wrap / block hidden relative index">

        <div class="Bee"></div>
        <div class="paragraphX2"></div>

        <span class="_img / Abs -all / flex cI cC">
            <img class="Img -cover" src="{{$image ?? '/images-0/catalog/package.png'}}" alt="">
        </span>

        <span class="Abs -all / Veil">
            <span class="_mid"></span>
        </span>

        <span class="Abs -all / flex cI cC / -Black">
            <span class="center-text / void-s">
                @isset($prev_p)
                <span class="p / block">{!!$prev_p!!}</span>
                @endisset
                @isset($prev_h)
                <span class="h -index -lineHeight c-h / block">{!!$prev_h!!}</span>
                @endisset
            </span>
        </span>
    </a>
    <div class="paragraph"></div>
@endcomponent