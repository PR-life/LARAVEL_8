@extends('zJJ.zJS._shema.index')
@section('title')Javascript @endsection


@section('content')

<div class="Pente aura / -White">
    <div class="Owl_1 / relative">
        @component('_wrap.Rail.vol-video', ['css' => 'yesEvents'])
            @slot('linkImg', '/brand/prev/promo.jpg')
            @slot('name', __('zImago/Rail/index.promo'))
            @slot('duration', '00:34')
            @slot('linkYoutube', '/brand/video/promo.jpg')
            {{-- <video preload="none" muted controls> --}}
            {{-- <video muted controls> --}}
                {{-- <source data-link="/video/z_imago/about/promo.webm" type="video/webm;"> --}}
                {{-- <source data-link="/video/z_imago/about/promo.ogv" type="video/ogg;" src=""> --}}
                {{-- <source data-link="/video/z_imago/about/promo.mp4" type="video/mp4;" src=""> --}}
                    {{-- <source data-link="/video/z_imago/about/promo.webm" type="video/webm;"src="/video/z_imago/about/promo.webm">
                    <source data-link="/video/z_imago/about/promo.ogv" type="video/ogg;" src="/video/z_imago/about/promo.ogv">
                    <source data-link="/video/z_imago/about/promo.mp4" type="video/mp4;" src="/video/z_imago/about/promo.mp4"> --}}
            {{-- </video> --}}
            <iframe data-link="https://www.youtube.com/embed/{{$linkYoutube ?? '9ttgeOhXG8s'}}?autoplay=1&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endcomponent
    </div>
</div>

@endsection
