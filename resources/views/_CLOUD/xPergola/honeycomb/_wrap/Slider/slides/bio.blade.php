<div id="scroll_05111046" class="JsScroll -left">

    <div class="space-left">
        @include('manager.scroll.left.asgrupp')
    </div>
 
    @component('_CLOUD.xPergola.honeycomb._wrap.Slider.slides.wrap.Roll')
        
        @foreach($casesWithPhotos['bio'] as $caseFolder => $_lib)
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
                @slot('jsCategory','bio')
                @slot('jsFolder',$caseFolder)

                <div class="Abs -all / Bg -gif">
                    <img class="Img -cover / H-100 W-100" src="{{ $previewImage }}" loading="lazy" alt="55555555">
                </div>
            @endcomponent
        @endforeach

    @endcomponent
</div>


