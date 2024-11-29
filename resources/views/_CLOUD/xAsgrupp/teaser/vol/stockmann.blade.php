<div class="item teaser / Teaser">
    <div class="relative / index">
        @isset($image)
        <picture class="relative 55W-100">
            <img class="Abs -lt / Img -cover" src="{{$image}}" alt="">
        </picture>
        @else
        <picture class="Bg -gif / relative"></picture>
        <div class="Abs -all / flex cI cC">
            <img class="Ico -XL" src="/images-0/catalog/index.svg" alt="нет фото">
        </div>
        @endisset
    </div>
</div>