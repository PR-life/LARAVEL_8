@isset($video)
<div class="Abs -all / flex cI">
    <video class="yesEvents" {{$videoParam ?? ''}} muted autoplay loop aria-label="Видео о [описание]">
        <source data-src="{{$video}}">
            Ваш браузер не поддерживает видео.
    </video>
</div>
@endisset