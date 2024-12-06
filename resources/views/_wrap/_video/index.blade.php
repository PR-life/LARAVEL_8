<video class="{{$css ?? ''}}" @isset($poster) poster="{{$poster}}" @endisset autoplay muted playsinline loop>

{{-- <source data-link="/video/z_imago/about/promo.webm" type="video/webm;"> --}}
{{-- <source data-link="/video/z_imago/about/promo.ogv" type="video/ogg;" src=""> --}}
{{-- <source data-link="/video/z_imago/about/promo.mp4" type="video/mp4;" src=""> --}}
{{-- <source data-link="/video/z_imago/about/promo.webm" type="video/webm;"src="/video/z_imago/about/promo.webm">
<source data-link="/video/z_imago/about/promo.ogv" type="video/ogg;" src="/video/z_imago/about/promo.ogv">
<source data-link="/video/z_imago/about/promo.mp4" type="video/mp4;" src="/video/z_imago/about/promo.mp4"> --}}

    <source src="{{$src}}" type="video/mp4;">
</video>
{{-- W-100 / Shift -left step --}}