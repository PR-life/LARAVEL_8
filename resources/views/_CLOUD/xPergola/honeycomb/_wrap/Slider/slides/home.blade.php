<div id="scroll_05111044" class="JsScroll -left">

    <div class="space-left">
        @include('manager.scroll.left.asgrupp')
    </div>
    
    <div class="Roll_mbl Roll_PC -edge -scrollBar -space / cross [ padding bottom ]" data-scroll>




@foreach($terrasaCases as $caseName => $_lib)
    @php
        // Ищем изображение с именем 'a.jpg'
        $previewImage = null;
        foreach ($_lib as $photo) {
            if (strpos($photo, 'a.jpg') !== false) {
                $previewImage = $photo;
                break;
            }
        }
        // Если 'a.jpg' не найдено, используем первое изображение
        if ($previewImage === null) {
            $previewImage = reset($_lib);
        }
    @endphp

    @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Wagon')
        @slot('divCopyId',$caseName)
        <div class="Abs -all">
            <img class="Img -cover / H-100 W-100" src="{{ $previewImage }}" loading="lazy" alt="55555555">
        </div>
    @endcomponent
@endforeach


 


        {{-- @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Wagon')
            @slot('divCopyId','demo0511')
            <img class="Img -cover / H-100 W-100" src="/images/catalog/24/house/11_b/a.jpg" alt="">
        @endcomponent
        @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Wagon')
            @slot('divCopyId','demo0511')
            <img class="Img -cover / H-100 W-100" src="/images/catalog/24/house/11_c/a.jpg" alt="">
        @endcomponent
        @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Wagon')
            @slot('divCopyId','demo0511')
            <img class="Img -cover / H-100 W-100" src="/images/catalog/24/house/11_d/a.jpg" alt="">
        @endcomponent
        @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Wagon')
            @slot('divCopyId','demo0511')
            <img class="Img -cover / H-100 W-100" src="/images/catalog/24/house/11_e/a.jpg" alt="">
        @endcomponent
        @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Wagon')
            @slot('divCopyId','demo0511')
            <img class="Img -cover / H-100 W-100" src="/images/catalog/24/house/11_f/a.jpg" alt="">
        @endcomponent



        @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Wagon')
            @slot('divCopyId','demo0511')
            <img class="Img -cover / H-100 W-100" src="/images/catalog/24/house/12_a/a.jpg" alt="">
        @endcomponent
        @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Wagon')
            @slot('divCopyId','demo0511')
            <img class="Img -cover / H-100 W-100" src="/images/catalog/24/house/12_b/a.jpg" alt="">
        @endcomponent
        @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Wagon')
            @slot('divCopyId','demo0511')
            <img class="Img -cover / H-100 W-100" src="/images/catalog/24/house/12_c/a.jpg" alt="">
        @endcomponent
        @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Wagon')
            @slot('divCopyId','demo0511')
            <img class="Img -cover / H-100 W-100" src="/images/catalog/24/house/12_d/a.jpg" alt="">
        @endcomponent
        @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Wagon')
            @slot('divCopyId','demo0511')
            <img class="Img -cover / H-100 W-100" src="/images/catalog/24/house/12_e/a.jpg" alt="">
        @endcomponent
        @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Wagon')
            @slot('divCopyId','demo0511')
            <img class="Img -cover / H-100 W-100" src="/images/catalog/24/house/12_f/a.jpg" alt="">
        @endcomponent
        @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Wagon')
            @slot('divCopyId','demo0511')
            <img class="Img -cover / H-100 W-100" src="/images/catalog/24/house/12_g/a.jpg" alt="">
        @endcomponent
        @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Wagon')
            @slot('divCopyId','demo0511')
            <img class="Img -cover / H-100 W-100" src="/images/catalog/24/house/12_i/a.jpg" alt="">
        @endcomponent
        @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Wagon')
            @slot('divCopyId','demo0511')
            <img class="Img -cover / H-100 W-100" src="/images/catalog/24/house/12_k/a.jpg" alt="">
        @endcomponent
        @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Wagon')
            @slot('divCopyId','demo0511')
            <img class="Img -cover / H-100 W-100" src="/images/catalog/24/house/12_l/a.jpg" alt="">
        @endcomponent
        @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Wagon')
            @slot('divCopyId','demo0511')
            <img class="Img -cover / H-100 W-100" src="/images/catalog/24/house/12_m/a.jpg" alt="">
        @endcomponent
        @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Wagon')
            @slot('divCopyId','demo0511')
            <img class="Img -cover / H-100 W-100" src="/images/catalog/24/house/12_n/a.jpg" alt="">
        @endcomponent
        @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Wagon')
            @slot('divCopyId','demo0511')
            <img class="Img -cover / H-100 W-100" src="/images/catalog/24/house/12_o/a.jpg" alt="">
        @endcomponent --}}

        <div class="Gstrm"></div>
    </div>
</div>


